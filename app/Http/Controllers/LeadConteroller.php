<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class LeadConteroller extends BaseController
{
    public function getLead(Request $request, $numberId){
        $response['leads'] = Message::where('number_id',$numberId)->with('leadnumber')->get();
        return $this->sendResponse( $response,"Lead get Successfully");
    }
}
