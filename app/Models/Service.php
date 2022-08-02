<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['maximum_seats', 'plate_no', 'franchise_no'];

    public function booking(){
        return $this->belongsTo('App\Models\Booking');
    }


}
