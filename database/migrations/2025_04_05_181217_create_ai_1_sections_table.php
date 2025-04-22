<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Can use a single ai_sections_table using a type or section column
    // 
    // Schema::create('ai_sections', function (Blueprint $table) {
    //     $table->id();
    //     $table->enum('section', [1, 2, 3]); // or string: ['hero', 'feature', 'cta']
    //     $table->string('image');
    //     $table->text('title');
    //     $table->mediumText('description');
    //     $table->timestamps();
        
    //     $table->index('section'); // For faster filtering
    // });
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ai_1_sections', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('title');
            $table->mediumText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_1_sections');
    }
};
