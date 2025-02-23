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
        Schema::create('inventry_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('toolName');
            $table->string('price');
            $table->string('catagory');
            $table->string('image');
            $table->string('quantity');
            
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventry_news');
    }
};
