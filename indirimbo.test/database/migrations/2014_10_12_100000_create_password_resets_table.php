<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
            $table->string('UUID');
            $table->softDeletes();
        });
        DB::unprepared('
        CREATE TRIGGER before_insert_password_resets
        BEFORE INSERT ON password_resets
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
        Schema::drop('password_resets');
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_password_resets');
    }
}
