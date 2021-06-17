<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('visi');
            $table->text('misi');
            $table->text('alamat');
            $table->text('ttl');
            $table->text('gender');
            $table->unsignedBigInteger('user_phone');
            $table->unsignedBigInteger('user_id');
            $table->string('file');
            $table->string('avatar');
            $table->unsignedBigInteger('poling_id');
            $table->timestamps();
            $table->foreign('user_phone')
            ->references('phone')->on('users')
            ->onDelete('cascade');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('poling_id')
            ->references('id')->on('poling')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate');
    }
}
