<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    public function sendResponse($result,$message) : JsonResponse  {
        $response = [
            "success"=>true,
            "data"=>$result,
            "message"=>$message
        ];

        return response()->json($response,200);
    }

    public function sendErrors($error, $errorMessage = [], $code= 400 ): JsonResponse{
        $response = [
            "success"=>false,
            "message"=>$error
        ];
        if(!empty($errorMessage)){
            $response["data"] = $errorMessage;
        }

        return reponse()->json($response,$code);
    }
}
