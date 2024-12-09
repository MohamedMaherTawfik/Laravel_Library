<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    /** @use HasFactory<\Database\Factories\BooksFactory> */
    use HasFactory;

    protected $table = 'books';
    protected $guarded=[];

    public function authors()
    {
        return $this->belongsTo(Authors::class);
    }

    public function categories()
    {
        return $this->belongsTo(BooksCategories::class);
    }

    public function borrowedBooks()
    {
        return $this->hasMany(BorrowBooks::class);
    }
}
