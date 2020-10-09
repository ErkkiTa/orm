<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    public function scopeSort($query, $order)
    {
        if (request()->has('sort')) {
            return $query->orderBy(request()->query('sort'), $order);
        }
        return $query;
    }
    
    public function author()
    {
        return $this->belongsToMany(Author::class, 'book_authors');
    }
}
