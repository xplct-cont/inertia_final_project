<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{

    public function index(){
        $buses = Bus::with('services')->get();

        return inertia('Bus', [
            'buses' => $buses
        ]);
    }
    
}
