<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['number_id','lead_number_id','message_text','serial','type'];

    public function leadnumber(){
        return $this->belongsTo(LeadNumber::class,'lead_number_id','id');
    }
}
