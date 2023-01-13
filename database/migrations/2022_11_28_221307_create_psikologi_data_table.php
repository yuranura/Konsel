<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikologi_data', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            // // $table->integer('user_id');
            // $table->string('nama_psikolog');
            // $table->integer('nomor_sertifikasi_psikolog');
            // $table->text('bio_psikolog');
            $table->string('image_psikolog');
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psikologi_data');
    }
};
