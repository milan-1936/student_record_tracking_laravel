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
        Schema::create('obt_marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('fm_exam_subject_id');
            $table->integer('eng')->nullable();
            $table->integer('nep')->nullable();
            $table->integer('math')->nullable();
            $table->integer('sci')->nullable();
            $table->integer('soc')->nullable();
            $table->integer('opti')->nullable();
            $table->integer('optii')->nullable();
            $table->integer('total')->nullable();
            $table->integer('percentage')->nullable();
            $table->string('grade')->nullable();
            $table->string('rank')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obt_marks');
    }
};
