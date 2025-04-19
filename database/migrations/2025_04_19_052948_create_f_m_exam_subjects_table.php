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
        Schema::create('f_m_exam_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained('examinations')->onDelete('cascade');
            $table->integer('english');
            $table->integer('nepali');
            $table->integer('math');
            $table->integer('science');
            $table->integer('social');
            $table->integer('opti');
            $table->integer('optii');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_m_exam_subjects');
    }
};
