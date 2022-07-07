<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyN1STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Key_N1', function (Blueprint $table) {
            $table->id();
            // for 1 character
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
            $table->string('ans21', 1);
            $table->string('ans22', 1);
            $table->string('ans23', 1);
            $table->string('ans24', 1);
            $table->string('ans25', 1);
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
        Schema::dropIfExists('Key_N1_s');
    }
}
