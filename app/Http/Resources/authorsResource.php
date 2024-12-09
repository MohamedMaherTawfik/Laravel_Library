<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class authorsResource extends JsonResource
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
            'name'=>$this->name,
            'nationallity'=>$this->nationallity,
            'biography'=>$this->biography,
            'birth_date'=>$this->birth_date,
            'books'=>$this->books,
        ];
    }
}
