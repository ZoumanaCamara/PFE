<?php

use App\Models\TypeTicket;
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
        Schema::create('type_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); 
            $table->string('slug')->unique(); 
            $table->timestamps();
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreignIdFor(TypeTicket::class)->constrained()->cascadeOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeignIdFor(TypeTicket::class)->constrained()->cascadeOnDelete(); 
        });
        
        Schema::dropIfExists('type_tickets');
    }
};
