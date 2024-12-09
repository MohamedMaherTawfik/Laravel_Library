<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\categoreyResource;
use App\Models\BooksCategories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    use apitrait;
    public function index(){
       $categories=BooksCategories::with('books')->get();
        return $this->apiresponse($categories,'Data recieved Successfully',200);
    }

    public function show(){
        $category=BooksCategories::with('books')->find(request('id'));
        if(!$category)
        {
            return $this->apiresponse(null,'category not found',404);
        }
        return $this->apiresponse(new categoreyResource($category),'Data recieved Successfully',200);
    }
}
