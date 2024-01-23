<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->date('date')->default(DB::raw('CURRENT_DATE'));
            $table->tinyText('post_type')->nullable();
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
        Schema::dropIfExists('posts');
    }
};