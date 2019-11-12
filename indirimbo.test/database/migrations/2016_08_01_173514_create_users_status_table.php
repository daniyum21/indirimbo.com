<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserStatusType', function(Blueprint $table)
        {

            $table->integer('StatusID',true);
            $table->string("StatusName");
            $table->string('UUID');
            $table->softDeletes();
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_UserStatusType
        BEFORE INSERT ON UserStatusType
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
        Schema::dropIfExists('UserStatusType');
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_UserStatusType');

    }
}
