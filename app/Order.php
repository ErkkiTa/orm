<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function scopeSort($query, $order)
    {
        if (request()->has('sort')) {
            return $query->orderBy(request()->query('sort'), $order);
        }
        return $query;
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }
}

