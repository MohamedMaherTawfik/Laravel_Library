<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\customerResource;
use Illuminate\Http\Request;
use App\Models\Customers;

class customersController extends Controller
{
    use apitrait;
    public function index()
    {
        $customers=Customers::all();
        return $this->apiresponse($customers,'Data recieved Successfully',200);
    }

    public function show()
    {
        $customers=Customers::find(request('id'));
        if(!$customers)
        {
            return $this->apiresponse(null,'customer not found',404);
        }
        return $this->apiresponse(new customerResource($customers),'Data recieved Successfully',200);
    }
}
