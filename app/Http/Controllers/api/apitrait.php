<?php

namespace App\Http\Controllers\api;

trait apitrait
{
    public function apiresponse($data =null,$message=null,$status=null)
    {
        $array=[
            'success' => $status,
            'message' => $message,
            'data' => $data,
        ];

        return response($array);
    }
}
