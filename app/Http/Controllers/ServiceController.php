<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Booking;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(){
     $bookings = Booking::with('services')->get();


        return inertia('Service', [
            'services' => $bookings
        ]);
    }
}
