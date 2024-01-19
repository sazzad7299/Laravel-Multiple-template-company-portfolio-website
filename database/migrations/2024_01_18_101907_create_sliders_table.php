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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('position')->default('left-middle');
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->string('feature_image');
            $table->tinyInteger('status')->default(1);
            $table->foreignId('created_by')->nullable()
            ->constrained('users', 'id')
            ->onDelete('set null');
        $table->foreignId('updated_by')->nullable()
            ->constrained('users', 'id')
            ->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};