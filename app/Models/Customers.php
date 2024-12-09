<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    /** @use HasFactory<\Database\Factories\CustomersFactory> */
    use HasFactory;

    protected $table = 'customers';

    protected $guarded = [];

    public function borrow_books()
    {
        return $this->hasMany(BorrowBooks::class);
    }
}
