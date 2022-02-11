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
            $table->text('tempatlahir');
            $table->date('tanggallahir');
            $table->text('gender');
            $table->string('user_phone');
            
            $table->string('file');
            $table->string('avatar');
            $table->string('status')->default('UNCONFIRMED');
            $table->unsignedBigInteger('community_id');
            $table->unsignedBigInteger('poling_id');
            $table->timestamps();
            $table->foreign('poling_id')
            ->references('id')->on('poling')
            ->onDelete('cascade');
            $table->foreign('community_id')
            ->references('id')->on('community')
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
