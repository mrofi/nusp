<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelUserWilayahRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wilayah_roles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('kode_wilayah');
            $table->integer('role_id')->unsigned();
            $table->primary(['user_id', 'kode_wilayah', 'role_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_wilayah_roles');
    }
}
