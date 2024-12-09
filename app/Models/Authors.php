<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorsFactory> */
    use HasFactory;

    protected $table='authors';
    protected $guarded=[];

    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
