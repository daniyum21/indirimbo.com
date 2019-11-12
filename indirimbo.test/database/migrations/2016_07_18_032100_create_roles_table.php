<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Roles', function(Blueprint $table)
        {

            $table->integer('RoleID',true);
            $table->string("RoleName");
            $table->timestamps();
            $table->string('UUID');
            $table->softDeletes();
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_Roles
        BEFORE INSERT ON Roles
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
        Schema::dropIfExists('Roles');
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_Roles');

    }
}
