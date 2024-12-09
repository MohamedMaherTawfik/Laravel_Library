<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BorrowBooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'customers_id'=>$this->customers_id,
            'books_id'=>$this->books_id,
            'status'=>$this->status,
            'borrow_date'=>$this->borrow_date,
            'return_date'=>$this->return_date,
            'customers'=>$this->customers
        ];
    }
}
