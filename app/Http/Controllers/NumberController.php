<?php

namespace App\Http\Controllers;

use App\Models\Number;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class NumberController extends BaseController
{
    public function getNumber(){
        $numbers = Number::get();
        return $this->sendResponse( $numbers,"Number get Successfully");
    }

    public function addNumber(Request $request){

        $form_data = $request->input();
        $gateway_id         =  $form_data['gateway_id'];
        $number               =  $form_data['number'];
        $number_unique  = Number::where('number',$number)->count();

        if($number_unique){
            return $this->sendResponse( $number_unique,"Number already Exist");
        }else{
            $create =   Number::create([
                'gateway_id'=> $gateway_id ,
                'user_id'=>  Auth::id(),
                'number'=>  $number
            ]);
            $message = "Attendence successfully Created";
            return $this->sendResponse($create,"Number added Successfully");
        }
    }

}
