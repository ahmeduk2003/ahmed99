<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromterReport extends Model
{
    protected $fillable=['Name','PhoneNumber','ExchangeMechanism','OldMilk' ,'NewMilk','Note','User_id'];
       
}
