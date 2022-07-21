<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateN1STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('N1', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('ruang_kelas')->nullable();
            $table->string('pil_jurusan')->nullable();
            $table->string('ans1', 1)->nullable();
            $table->string('ans2', 1)->nullable();
            $table->string('ans3', 1)->nullable();
            $table->string('ans4', 1)->nullable();
            $table->string('ans5', 1)->nullable();
            $table->string('ans6', 1)->nullable();
            $table->string('ans7', 1)->nullable();
            $table->string('ans8', 1)->nullable();
            $table->string('ans9', 1)->nullable();
            $table->string('ans10', 1)->nullable();
            $table->string('ans11', 1)->nullable();
            $table->string('ans12', 1)->nullable();
            $table->string('ans13', 1)->nullable();
            $table->string('ans14', 1)->nullable();
            $table->string('ans15', 1)->nullable();
            $table->string('ans16', 1)->nullable();
            $table->string('ans17', 1)->nullable();
            $table->string('ans18', 1)->nullable();
            $table->string('ans19', 1)->nullable();
            $table->string('ans20', 1)->nullable();
            $table->string('ans21', 1)->nullable();
            $table->string('ans22', 1)->nullable();
            $table->string('ans23', 1)->nullable();
            $table->string('ans24', 1)->nullable();
            $table->string('ans25', 1)->nullable();
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
        Schema::dropIfExists('n1_s');
    }
}
