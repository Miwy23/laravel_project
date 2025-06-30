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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // coloana id, auto increment
            $table->string('title'); // titlul taskului
            $table->text('description')->nullable(); // descrierea, poate fi null
            $table->boolean('completed')->default(false); // status task (finalizat sau nu)
            $table->timestamps(); // created_at și updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};