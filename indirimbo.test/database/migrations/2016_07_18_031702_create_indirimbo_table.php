<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndirimboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Indirimbo', function(Blueprint $table)
        {
            Schema::dropIfExists("Indirimbo");

            //$table->engine = 'MyISAM';
            //$table->increments('SongID');
            $table->integer('SongID',true);

            $table->integer('SongNumber')->nullable();
            $table->string('umubare',5)->nullable();
            $table->string('ImageUrl',100)->nullable();
            $table->string('Title',200);
            $table->string('Audio',200)->nullable();
            $table->string('FileName',200)->nullable();
            $table->string('OriginalFileName',200)->nullable();

            $table->string('Video',200)->nullable();
            $table->string('ReleaseYear',200)->nullable();
            $table->string('AlbumName',200)->nullable();
            $table->string('mime',200)->nullable();

            $table->string('Description',1000)->nullable();
            $table->integer('SectionID')->nullable();
            $table->integer('SubSectionID')->nullable();
            $table->text('SongLyrics')->nullable();
            $table->text('YoutubeLink')->nullable();
            $table->integer('UmuhanziID')->nullable();
            $table->integer('ChoirID')->nullable();
            $table->integer('country_id')->nullable()->default(1);//default to Rwanda
            $table->text('references')->nullable();
            $table->text('slug')->nullable();
            $table->string('UUID');

            $table->timestamps();
            $table->softDeletes();

            //
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_Indirimbo
        BEFORE INSERT ON Indirimbo
        FOR EACH ROW
        SET new.UUID = uuid();'
        );
        DB::statement('ALTER TABLE Indirimbo ADD FULLTEXT searchSong(umubare, Title,Description)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

//        Schema::table('Indirimbo', function($table) {
//            $table->dropIndex('searchSong');
//        });

        Schema::dropIfExists("Indirimbo");
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_Indirimbo');


    }
}
