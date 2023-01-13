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
        Schema::create('user_test_jawaban', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->integer('user_test_id');
            // $table->integer('pertanyaan_id');
            $table->string('soal');
            $table->string('jawaban');
            $table->foreignId('user_test_id')->constrained('user_test');
            $table->foreignId('pertanyaan_id')->constrained('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_test_jawaban');
    }
};
