<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BookSections', function(Blueprint $table)
        {
            //$table->engine = 'MyISAM';
            //$table->increments('SectionID');
            $table->integer('SectionID',true);
            $table->string('SectionName',40);
            $table->timestamps();
            $table->string('UUID');
            $table->softDeletes();

            //
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_BookSections
        BEFORE INSERT ON BookSections
        FOR EACH ROW
        SET new.UUID = uuid();'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("BookSections");
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_BookSections');


    }
}
