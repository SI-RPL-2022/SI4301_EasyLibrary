<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOption\None;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('id_card')->nullable();
            $table->string('nama_depan');
            $table->string('nama_belakang')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('no_handphone')->nullable();
            $table->string('alamat')->nullable();
            $table->string('negara')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('foto')->nullable();
            $table->string('kyc')->nullable();
            $table->string('roles')->default('User');
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
        Schema::dropIfExists('users');
    }
};
