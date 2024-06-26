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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();  
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();  
            $table->foreignId('cart_id')->constrained()->cascadeOnDelete();  
            $table->string('nom'); 
            $table->string('slug')->unique(); 
            $table->string('categorie'); 
            $table->string('description'); 
            $table->float('prix'); 
            $table->string('image'); 
            $table->string('fichier_source'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->dropForeign(['category_id']); 
            $table->dropForeign(['user_id']); 
            $table->dropForeign(['cart_id']); 
            $table->dropColumn(['category_id', 'user_id', 'cart_id']); 
        }); 
        Schema::dropIfExists('articles');
    }
};
