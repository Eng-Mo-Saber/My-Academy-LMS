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
    Schema::create('courses', function (Blueprint $table) {
        $table->id();

        $table->string('title');
        $table->text('description')->nullable();
        $table->text('details')->nullable();

        // published | unpublished
        $table->enum('status', ['published', 'unpublished'])->default('published');

        $table->boolean('is_free')->default(false);
        $table->decimal('price', 8, 2)->nullable();
        $table->string('img')->nullable();
        $table->string('classification')->nullable();

        // instructor
        $table->foreignId('user_instr_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
