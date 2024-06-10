<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom'); 
            $table->string('tel')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('type'); 
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('annoucements', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete(); 
        });

        Schema::table('advertisements', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete(); 
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete(); 
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->nullOnDelete(); 
        });

        Schema::table('purchases', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete(); 
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete(); 
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('annoucements', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class); 
        });

        Schema::table('advertisements', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class); 
        });

        Schema::table('events', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class); 
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class); 
        });

        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class); 
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class); 
        });


        Schema::dropIfExists('users');
    }
};
