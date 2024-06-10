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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); 
            $table->string('quantite'); 
            $table->float('montant'); 
            $table->string('methode_paiement'); 
            $table->string('status'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('purchases', function (Blueprint $table) {
            
        //     $table->dropForeign('user_id'); 
        //     $table->dropColumn('user_id'); 
        // });

        Schema::dropIfExists('purchases');
    }
};
