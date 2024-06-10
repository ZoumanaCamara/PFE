<?php

use App\Models\Ticket;
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
            $table->string('numero_ticket')->unique(); 
            $table->float('prix'); 
            $table->string('type'); 
            $table->string('status'); 
            $table->string('code_qr')->unique; 
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreignIdFor(Ticket::class)->constrained()->cascadeOnDelete(); 
        });

        Schema::table('purchases', function (Blueprint $table) {
            $table->foreignIdFor(Ticket::class)->constrained()->cascadeOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeignIdFor(Ticket::class); 
        });

        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeignIdFor(Ticket::class); 
        });


    }
};
