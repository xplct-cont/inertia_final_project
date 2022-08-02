<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['operator', 'bus_name', 'point_of_origin', 'start_time', 'destination', 'drop_time', 'ticket_no', 'passenger_name', 'age'];

      

public function services(){
    return $this->hasMany('App\Models\Service');
}

}
