<?php

namespace App\Http\Controllers;

use App\Models\Number;

class NumberController extends BaseController
{
    public function getNumber(){
        $numbers = Number::get();
        return $this->sendResponse( $numbers,"Number get Successfully");
    }
}
