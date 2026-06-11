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
    Schema::create('student_courses', function (Blueprint $table) {
        $table->id();
        // نسبة التقدم
        $table->integer('progress')->default(0);
        // ongoing | finished
        $table->enum('status', ['ongoing','finished'])->default('ongoing');
        $table->timestamps();

        $table->foreignId('user_id')->constrained()->cascadeOnDelete();

        $table->foreignId('course_id')->constrained()->cascadeOnDelete();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_courses');
    }
};
