<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSubsectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BookSubSections', function(Blueprint $table)
        {
            //$table->engine = 'MyISAM';
            //$table->increments('SubSectionID');

            $table->integer('SubSectionID',true);
            $table->string('SubSectionName',40);
            $table->integer('country_id')->nullable()->default(1);
            $table->timestamps();
            $table->string('UUID');
            $table->softDeletes();

            //
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_BookSubSections
        BEFORE INSERT ON BookSubSections
        FOR EACH ROW
        SET new.UUID = uuid();'
        );

        //
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("BookSubSections");
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_BookSubSections');

    }
}
