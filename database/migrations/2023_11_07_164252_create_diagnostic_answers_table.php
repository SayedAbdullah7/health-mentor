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
        Schema::create('diagnostic_answers', function (Blueprint $table) {
            $table->id();
//            $table->foreignIdFor(\App\Models\UserDiagnosis::class)->index()->constrained();
            $table->foreignIdFor(\App\Models\Diagnosis::class)->index()->constrained();
            $table->foreignIdFor(\App\Models\Answer::class)->index()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostic_answers');
    }
};
