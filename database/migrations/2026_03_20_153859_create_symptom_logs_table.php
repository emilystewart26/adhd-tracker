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
    Schema::create('symptom_logs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();

        $table->date('date');

        $table->tinyInteger('emotional_lability');
        $table->tinyInteger('irritability');
        $table->tinyInteger('focus');
        $table->tinyInteger('distractability');
        $table->tinyInteger('impulsivity');
        $table->tinyInteger('energy');
        $table->tinyInteger('task_initiation');
        $table->tinyInteger('physical_anxiety');
        $table->tinyInteger('mood');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symptom_logs');
    }
};
