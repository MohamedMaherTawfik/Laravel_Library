<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class bookResource extends JsonResource
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
            'bookname'=>$this->bookname,
            'authors_id'=>$this->authors_id,
            'books_categories_id'=>$this->books_categories_id,
            'published_date'=>$this->publish_year,
            'language'=>$this->language,
            'quantity'=>$this->quantity,
            'status'=>$this->status
        ];
    }
}
