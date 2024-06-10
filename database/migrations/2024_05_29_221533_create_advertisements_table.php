<?php

use App\Models\Advertisement;
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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();  
            $table->string('categorie'); 
            $table->string('description'); 
            $table->string('contenu'); 
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('advertisements', function(Blueprint $table) {
        //     $table->dropForeign(['user_id']); 
        //     $table->dropColumn(['user_id']); 
        // }); 

        Schema::dropIfExists('advertisements');
    }
};
