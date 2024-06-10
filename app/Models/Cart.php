<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;

    public function user(): HasOne
    {
        return $this->hasOne(User::class); 
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
