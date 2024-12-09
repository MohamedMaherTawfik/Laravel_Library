<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Resources\bookResource;

class booksController extends Controller
{
    use apitrait;
    public function index(){
        $books=Books::all();
        return $this->apiresponse($books,'Data recieved Successfully',200);
    }

    public function show(){
        $book=Books::find(request('id'));
        if(!$book)
        {
            return $this->apiresponse(null,'book not found',404);
        }
        return $this->apiresponse(new bookResource($book),'Data recieved Successfully',200);
    }
}
