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
        Schema::create('portfolioourworks', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('heading');
            $table->string('title',length:100);
            $table->string('description',length:500);
            $table->mediumText('explaination');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolioourworks');
    }
};
