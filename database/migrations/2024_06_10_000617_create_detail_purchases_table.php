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
        Schema::create('detail_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function dow(): void 
    {
        Schema::table('detail_purchases', function (Blueprint $table) {
            $table->dropForeign(['purchase_id']); 
            $table->dropColumn(['purchase_id']);
        });
            
        Schema::dropIfExists('detail_purchases');
    }
};
