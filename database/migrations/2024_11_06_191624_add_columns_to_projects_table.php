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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('title');
            $table->text('description');
            $table->string('url')->nullable();
            $table->string('image_path')->nullable();
            $table->string('github_url')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('status')->default('draft');
            $table->string('category')->nullable();
            $table->json('technologies')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'description',
                'url',
                'image_path',
                'github_url',
                'start_date',
                'end_date',
                'status',
                'category',
                'technologies'
            ]);
        });
    }
};