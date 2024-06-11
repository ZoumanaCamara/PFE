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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('typeticket_id')->constrained()->cascadeOnDelete(); 
            $table->foreignId('purchase_id')->constrained()->cascadeOnDelete(); 
            $table->foreignId('cart_id')->constrained()->cascadeOnDelete(); 
            $table->string('numero_ticket')->unique(); 
            $table->float('prix'); 
            $table->string('type'); 
            $table->string('status'); 
            $table->string('code_qr')->unique; 
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['typeticket_id', 'purchase_id', 'cart_id']); 
            $table->dropColumn(['typeticket_id', 'purchase_id', 'cart_id']); 
        });
        

        Schema::dropIfExists('tickets');
        
    }
};
