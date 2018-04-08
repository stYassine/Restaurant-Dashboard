<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    
    protected $fillable =[
        'status', 'name', 'email', 'phone', 'date_and_time', 'message'
    ];
    
}
