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
        Schema::create('user_test', function (Blueprint $table) {
            $table->id()->unique();
           // $table->timestamps();
            // $table->integer('test_id');
            // $table->integer('user_id');
            $table->foreignId('test_id')->constrained('test');
            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('mulai');
            $table->dateTime('selesai');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_test');
    }
};
