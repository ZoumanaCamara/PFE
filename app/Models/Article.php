<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class); 
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class); 
    }

    public function purchases(): BelongsToMany
    {
        return $this->belongsToMany(Purchase::class); 
    }

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class); 
    }
}
