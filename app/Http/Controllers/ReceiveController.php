<?php

namespace App\Http\Controllers;

use App\Models\LeadNumber;
use App\Models\Message;
use App\Models\Number;
use Illuminate\Http\Request;

class ReceiveController extends BaseController
{
    public function receiveMessage(Request $request){
        $lead_number = $request->number;
        $receive_number = $request->receiver;
        $message = $request->message;
        $response['lead_number'] = $lead_number ;
        $response['receive_number'] = $receive_number ;
        $response['message'] =  $message;
        // check lead is uniq //

       $leadNumberCreate = LeadNumber::firstOrCreate([
            'number'=>  $lead_number,
            'status'=>'active'
        ]);

       $number_id = Number::where('number',$receive_number)->pluck('id')->first();

       Message::create([
            'number_id'=> $number_id,
            'lead_number_id'=> $leadNumberCreate->id,
            'message_text'=> $message,
            'serial'=>1, // need to work on serial
            'type'=>'incoming',
       ]);

        return $this->sendResponse( $response,"Mesage get Successfully");
    }
}
