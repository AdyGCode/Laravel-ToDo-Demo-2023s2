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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->text('description')->nullable();
            $table->foreignId('project_id')->default(1); // unknown
            $table->foreignId('priority_id')->default(1); // unknown
            $table->foreignId('status_id')->default(1); // unknown
            $table->timestamps();

            $table->index(['name','project_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
