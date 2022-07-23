<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateN2STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('N2', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('ruang_kelas')->nullable();
            $table->string('pil_jurusan')->nullable();
            $table->string('ans1')->nullable();
            $table->string('ans2')->nullable();
            $table->string('ans3')->nullable();
            $table->string('ans4')->nullable();
            $table->string('ans5')->nullable();
            $table->string('ans6')->nullable();
            $table->string('ans7')->nullable();
            $table->string('ans8')->nullable();
            $table->string('ans9')->nullable();
            $table->string('ans10')->nullable();
            $table->string('ans11')->nullable();
            $table->string('ans12')->nullable();
            $table->string('ans13')->nullable();
            $table->string('ans14')->nullable();
            $table->string('ans15')->nullable();
            $table->string('ans16')->nullable();
            $table->string('ans17')->nullable();
            $table->string('ans18')->nullable();
            $table->string('ans19')->nullable();
            $table->string('ans20')->nullable();
            $table->string('ans21')->nullable();
            $table->string('ans22')->nullable();
            $table->string('ans23')->nullable();
            $table->string('ans24')->nullable();
            $table->string('ans25')->nullable();
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
        Schema::dropIfExists('n2_s');
    }
}
