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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('nom'); 
            $table->dateTime('date_debut', $precision = 0);
            $table->dateTime('date_fin', $precision = 0);
            $table->string('lieu');
            $table->string('description'); 
            $table->string('capacite'); 
            $table->string('artiste_invite');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function(Blueprint $table) {
            $table->dropForeign(['user_id']); 
            $table->dropColumn(['user_id']); 
        }); 

        Schema::dropIfExists('events');
    }
};
