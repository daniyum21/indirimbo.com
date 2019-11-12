<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmakoraliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Choir', function(Blueprint $table)
        {
            Schema::dropIfExists("Choir");

            //$table->engine = 'MyISAM';
            //$table->increments('SongID');
            $table->integer('ChoirID',true);
            $table->string('ChoirName');
            $table->string('ChurchName');
            $table->string('Akarere');
            $table->string('Intara');

            $table->string('ImageUrl',100)->nullable();
            $table->text('Biography',1000)->nullable();
            $table->text('website')->nullable();
            $table->text('YoutubeLink')->nullable();
            $table->timestamps();
            $table->integer('country_id')->nullable()->default(1);//default to Rwanda
            $table->string('UUID');
            $table->softDeletes();


        });
        DB::unprepared('
        CREATE TRIGGER before_insert_Choir
        BEFORE INSERT ON Choir
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
        Schema::dropIfExists('Choir');
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_Choir');

    }
}
