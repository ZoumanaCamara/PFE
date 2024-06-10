<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Purchase extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); 
    }

    public function details(): HasMany
    {
        return $this->hasMany(DetailPurchase::class); 
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class); 
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class); 
    }
}
