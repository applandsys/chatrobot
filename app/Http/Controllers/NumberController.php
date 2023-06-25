<?php

namespace App\Http\Controllers;

use Database\Seeders\NumberSeeder;
use Illuminate\Http\Request;

class NumberController extends BaseController
{
    public function getNumber(){
        $numbers = Number::get();
        return $this->sendResponse( $numbers,"Number get Successfully");
    }
}
