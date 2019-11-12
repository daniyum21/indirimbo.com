<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {


            //$table->engine = 'InnoDB';
            $table->integer('UserID',true);
            $table->string("FirstName");
            $table->string("LastName");
            $table->string("Email");//->unique();
            $table->string("Password");
            $table->integer('RoleID');//this is the role of the user.
            $table->integer('StatusID')->default(1);//this is the status of the user.
            $table->rememberToken();
            $table->timestamps();
            $table->string('UUID');
            $table->softDeletes();

        });
        DB::unprepared('
        CREATE TRIGGER before_insert_Users
        BEFORE INSERT ON Users
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
        Schema::drop('Users');
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_Users');
    }
}
