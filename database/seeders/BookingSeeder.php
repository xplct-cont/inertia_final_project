<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = [
            [
                'operator' => 'Keanu Reeves', 
                'bus_name' => 'Ceres Bus Lines', 
                'point_of_origin' => 'Cabulijan, Tubigon, Bohol', 
                'start_time' => '7:30 AM', 
                'destination' => 'Tagbilaran City, Bohol',
                'drop_time' => '9:30 AM',
                'ticket_no' => '763132',
                'passenger_name' => 'Severus Snape', 
                'age' => '32',
               
                
            ],
        ];
        foreach($bookings as $booking){
            Booking::create($booking);
        }
    }
}




