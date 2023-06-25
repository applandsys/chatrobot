<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class LogoutController extends BaseController
{
    public function logout(Request $request): JsonResponse
    {
        $success["status"] = 'success';
        $success["logout"] = true;
        $request->user()->currentAccessToken()->delete();
        return $this->sendResponse( $success, ['error'=>'Unauthorised']);
    }
}
