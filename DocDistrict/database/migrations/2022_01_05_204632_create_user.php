<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('ttl')->nullable();
            $table->string('noHP');
            $table->string('alamat')->nullable();
            $table->string('nik')->nullable();
        });

        Schema::create('document', function (Blueprint $table) {
            $table->bigIncrements('id_doc')->unsigned();
            $table->string('title_doc');
            $table->string('desc_doc');
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id_admin')->unsigned();
            $table->string('nama_admin');
            $table->string('email');
            $table->string('password');
        });

        Schema::create('mydocument', function (Blueprint $table) {
            $table->bigIncrements('id_mydoc')->unsigned();
            $table->foreignId('id_doc');
            $table->foreignId('id_user');
            $table->string('status');
            $table->timestamp('created_at');

            $table->foreign('id_doc')->references('id_doc')->on('document');
            $table->foreign('id_user')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('document');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('mydocument');
        
    }
}
