<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('Chapters', function(Blueprint $table)
        {
            //$table->engine = 'MyISAM';;
            $table->integer('ChapterID',true);
            $table->integer('SongID');//->unique();
            $table->integer('SongNumber')->nullable();
            $table->string('ChapterText',1000);
            $table->enum('Chorus',array('Yes','No'))->default('No');
            $table->string('UUID');
            $table->softDeletes();
            /*$table->foreign('SongID')
                 ->references('SongID')->on('Indirimbo')
                  ->onDelete('cascade');
            */

            /*$table->foreign('SongNumber')
                 ->references('SongNumber')->on('Indirimbo')
                  ->onDelete('cascade');
*/			$table->timestamps();
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_Chapters
        BEFORE INSERT ON Chapters
        FOR EACH ROW
        SET new.UUID = uuid();'
        );
        DB::statement('ALTER TABLE Chapters ADD FULLTEXT searchChapter(ChapterText)');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('Chapters', function(Blueprint $table)
        //{
        //
        //});

//        Schema::table('Chapters', function($table) {
//            $table->dropIndex('searchChapter');
//        });
        Schema::dropIfExists("Chapters");
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_Chapters');

    }
}
