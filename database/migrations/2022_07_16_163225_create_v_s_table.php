<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('V', function (Blueprint $table) {
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
            $table->string('ans26', 1)->nullable();
            $table->string('ans27', 1)->nullable();
            $table->string('ans28', 1)->nullable();
            $table->string('ans29', 1)->nullable();
            $table->string('ans30', 1)->nullable();
            $table->string('ans31', 1)->nullable();
            $table->string('ans32', 1)->nullable();
            $table->string('ans33', 1)->nullable();
            $table->string('ans34', 1)->nullable();
            $table->string('ans35', 1)->nullable();
            $table->string('ans36', 1)->nullable();
            $table->string('ans37', 1)->nullable();
            $table->string('ans38', 1)->nullable();
            $table->string('ans39', 1)->nullable();
            $table->string('ans40', 1)->nullable();
            $table->string('ans41', 1)->nullable();
            $table->string('ans42', 1)->nullable();
            $table->string('ans43', 1)->nullable();
            $table->string('ans44', 1)->nullable();
            $table->string('ans45', 1)->nullable();
            $table->string('ans46', 1)->nullable();
            $table->string('ans47', 1)->nullable();
            $table->string('ans48', 1)->nullable();
            $table->string('ans49', 1)->nullable();
            $table->string('ans50', 1)->nullable();
            $table->string('ans51', 1)->nullable();
            $table->string('ans52', 1)->nullable();
            $table->string('ans53', 1)->nullable();
            $table->string('ans54', 1)->nullable();
            $table->string('ans55', 1)->nullable();
            $table->string('ans56', 1)->nullable();
            $table->string('ans57', 1)->nullable();
            $table->string('ans58', 1)->nullable();
            $table->string('ans59', 1)->nullable();
            $table->string('ans60', 1)->nullable();
            $table->string('ans61', 1)->nullable();
            $table->string('ans62', 1)->nullable();
            $table->string('ans63', 1)->nullable();
            $table->string('ans64', 1)->nullable();
            $table->string('ans65', 1)->nullable();
            $table->string('ans66', 1)->nullable();
            $table->string('ans67', 1)->nullable();
            $table->string('ans68', 1)->nullable();
            $table->string('ans69', 1)->nullable();
            $table->string('ans70', 1)->nullable();
            $table->string('ans71', 1)->nullable();
            $table->string('ans72', 1)->nullable();
            $table->string('ans73', 1)->nullable();
            $table->string('ans74', 1)->nullable();
            $table->string('ans75', 1)->nullable();
            $table->string('ans76', 1)->nullable();
            $table->string('ans77', 1)->nullable();
            $table->string('ans78', 1)->nullable();
            $table->string('ans79', 1)->nullable();
            $table->string('ans80', 1)->nullable();
            $table->string('ans81', 1)->nullable();
            $table->string('ans82', 1)->nullable();
            $table->string('ans83', 1)->nullable();
            $table->string('ans84', 1)->nullable();
            $table->string('ans85', 1)->nullable();
            $table->string('ans86', 1)->nullable();
            $table->string('ans87', 1)->nullable();
            $table->string('ans88', 1)->nullable();
            $table->string('ans89', 1)->nullable();
            $table->string('ans90', 1)->nullable();
            $table->string('ans91', 1)->nullable();
            $table->string('ans92', 1)->nullable();
            $table->string('ans93', 1)->nullable();
            $table->string('ans94', 1)->nullable();
            $table->string('ans95', 1)->nullable();
            $table->string('ans96', 1)->nullable();
            $table->string('ans97', 1)->nullable();
            $table->string('ans98', 1)->nullable();
            $table->string('ans99', 1)->nullable();
            $table->string('ans100', 1)->nullable();
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
        Schema::dropIfExists('v_s');
    }
}
