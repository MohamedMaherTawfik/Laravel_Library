<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\authorsResource;
use Illuminate\Http\Request;
use App\Models\Authors;

class authorsController extends Controller
{
    use apitrait;
    public function index()
    {
        $authors=Authors::with('books')->get();
        return $this->apiresponse($authors,'Data recieved Successfully',200);
    }

    public function show(){
        $author=Authors::with('books')->find(request('id'));
        if(!$author)
        {
            return $this->apiresponse(null,'author not found',404);
        }
        return $this->apiresponse(new authorsResource($author),'Data recieved Successfully',200);
    }
}
