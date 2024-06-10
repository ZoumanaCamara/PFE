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
        Schema::create('article_purchase', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained()->cascadeOnDelete(); 
            $table->foreignId('purchase_id')->constrained()->cascadeOnDelete(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('article_purchase', function (Blueprint $table) {
            $table->dropForeign(['article_id', 'purchase_id']); 
            $table->dropColumn(['article_id', 'purchase_id']); 
        }); 
            
        Schema::dropIfExists('article_purchase');
    }
};
