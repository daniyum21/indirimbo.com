<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArtistTypes', function(Blueprint $table)
        {

            $table->integer('TypeID',true);
            $table->string("TypeName");
            $table->timestamps();
            $table->string('UUID');
            $table->softDeletes();
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_Artists
        BEFORE INSERT ON ArtistTypes
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
        Schema::dropIfExists('ArtistTypes');
         DB::unprepared('DROP TRIGGER IF EXISTS before_insert_Artists');
    }
}
