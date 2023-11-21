<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answer_result', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('answer_id')->index();
            $table->unsignedBigInteger('result_id')->index();
            $table->timestamps();

//            $table->primary(['answer_id', 'result_id']);

            // Define foreign keys
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
            $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_result');
    }
};
