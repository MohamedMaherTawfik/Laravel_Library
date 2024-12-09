<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowBooks extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowBooksFactory> */
    use HasFactory;
    
    protected $table ='borrow_books';
    protected $guarded=[];

    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }

    public function books()
    {
        return $this->belongsTo(Books::class);
    }
    

}
