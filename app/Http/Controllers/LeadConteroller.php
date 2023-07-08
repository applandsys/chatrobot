<?php

namespace App\Http\Controllers;

use App\Models\LeadNumber;
use App\Models\Message;
use App\Models\Number;
use Illuminate\Http\Request;

class LeadConteroller extends BaseController
{
    public function getLeadNumber(Request $request, $numberId){
        $messages = Message::where('number_id',$numberId)->get();

        $leadNumberArr = [];
        $leadNumbers = [];
        $response['lead_number'] =[];

        foreach($messages as $message){
            $leadNumberId = $message->lead_number_id;
            if(!in_array($leadNumberId, $leadNumberArr)){
                $leads = LeadNumber::find($leadNumberId)->pluck('id')->first();
                $leadNumber = LeadNumber::find($leadNumberId);
                array_push( $leadNumberArr, $leads);
                array_push(  $leadNumbers,  $leadNumber);
            }
        }

        $response['lead_number'] =  $leadNumbers;
        return $this->sendResponse( $response,"Lead Number get Successfully");
    }
}
