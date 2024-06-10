<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class); 
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeTicket::class); 
    }

    public function purchase(): BelongsTo
    {
        return $this->belongsTo(Purchase::class); 
    }

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class); 
    }
}
