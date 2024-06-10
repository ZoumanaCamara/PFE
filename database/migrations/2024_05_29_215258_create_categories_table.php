<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); 
            $table->string('slug')->unique(); 
            $table->timestamps();
        });

        Schema::table('articles', function(Blueprint $table) {
            $table->foreignIdFor(Category::class)->constrained()->nullOnDelete(); 
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        
        Schema::table('articles', function(Blueprint $table) {
            $table->dropForeignIdFor(Category::class); 
        }); 
    }
};
