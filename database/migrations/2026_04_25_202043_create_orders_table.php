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
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('payment_type');
        // pending | confirmed | rejected
        $table->enum('status', ['pending','confirmed','rejected'])->default('pending');
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
        Schema::dropIfExists('orders');
    }
};
