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
        Schema::create('user_psikologi', function (Blueprint $table) {
            $table->id();

            // $table->integer('user_id');
            // $table->integer('psikolog_id');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('psikolog_id')->constrained('psikologi_data');
            $table->text('meeting_link');
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
        Schema::dropIfExists('user_psikologi');
    }
};
