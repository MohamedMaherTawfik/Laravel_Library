<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BorrowBooksResource;
use App\Models\BorrowBooks;
use Illuminate\Http\Request;
use App\Models\books;
use App\Http\Resources\bookResource;

class borrowBooksController extends Controller
{
    use apitrait;
    public function index()
    {
        $borrowBooks=BorrowBooks::with('customers')->where('status','borrowed')->get();
        return $this->apiresponse($borrowBooks,'Data recieved Successfully',200);
    }

    public function show(){
        $borrowBooks=BorrowBooks::with('customers')->where('status','borrowed')->find(request('id'));
        if(!$borrowBooks)
        {
            return $this->apiresponse(null,'book not found',404);
        }
        return $this->apiresponse(new BorrowBooksResource($borrowBooks),'Data recieved Successfully',200);
    }
}
