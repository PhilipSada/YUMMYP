<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable =[
        'firstname', 'lastname', 'email', 'guests_total', 'time', 'phone_number'
    ];
}
