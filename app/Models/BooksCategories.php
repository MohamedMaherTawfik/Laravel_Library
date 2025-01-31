<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksCategories extends Model
{
    /** @use HasFactory<\Database\Factories\BooksCategoriesFactory> */
    use HasFactory;

    protected $table='books_categories';
    protected $guarded=[];

    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
