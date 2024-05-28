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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('toolName');
            $table->string('price');
            $table->string('catagory');
            $table->string('image')->nullable();
            $table->string('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
        $table->dropColumn('toolName');
            $table->dropColumn('price');
            $table->dropColumn('catagory');
            $table->dropColumn('quantity');
            $table->dropColumn('image');
    }
};
