<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateN3STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('N3', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ans1', 1);
            $table->string('ans2', 1);
            $table->string('ans3', 1);
            $table->string('ans4', 1);
            $table->string('ans5', 1);
            $table->string('ans6', 1);
            $table->string('ans7', 1);
            $table->string('ans8', 1);
            $table->string('ans9', 1);
            $table->string('ans10', 1);
            $table->string('ans11', 1);
            $table->string('ans12', 1);
            $table->string('ans13', 1);
            $table->string('ans14', 1);
            $table->string('ans15', 1);
            $table->string('ans16', 1);
            $table->string('ans17', 1);
            $table->string('ans18', 1);
            $table->string('ans19', 1);
            $table->string('ans20', 1);
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
        Schema::dropIfExists('n3_s');
    }
}
