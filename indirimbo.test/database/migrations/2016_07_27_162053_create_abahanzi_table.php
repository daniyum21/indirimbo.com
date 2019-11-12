<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbahanziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Umuhanzi', function(Blueprint $table)
        {
            Schema::dropIfExists("Umuhanzi");

            //$table->engine = 'MyISAM';
            //$table->increments('SongID');
            $table->integer('UmuhanziID',true);

            $table->string('FirstName');
            $table->string('LastName');
            $table->string('StageName');
            $table->string('Twitter')->nullable();
            $table->string('ImageUrl',100)->nullable();
            $table->text('Biography',1000)->nullable();
            $table->text('website')->nullable();
            $table->text('YoutubeLink')->nullable();
            $table->integer('country_id')->nullable()->default(1);//default to Rwanda

            $table->timestamps();
            $table->string('UUID');
            $table->softDeletes();


        });
        DB::unprepared('
        CREATE TRIGGER before_insert_Umuhanzi
        BEFORE INSERT ON Umuhanzi
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
        Schema::dropIfExists('Umuhanzi');
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_Umuhanzi');

    }
}
