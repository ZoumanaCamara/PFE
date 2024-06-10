<?php

use App\Models\Cart;
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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->float('total');
            $table->string('etat');  
            $table->timestamps();
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreignIdFor(Cart::class)->constrained()->cascadeOnDelete(); 
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->foreignIdFor(Cart::class)->constrained()->cascadeOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->dropForeignIdFor(Cart::class); 
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->dropForeignIdFor(Cart::class); 
        });

        Schema::dropIfExists('carts');
    }
};
