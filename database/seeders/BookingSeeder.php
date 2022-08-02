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
            [
                'operator' => 'Draco Malfoy', 
                'bus_name' => 'Charter Bus Co', 
                'point_of_origin' => 'Tinangnan, Tubigon, Bohol', 
                'start_time' => '8:30 AM', 
                'destination' => 'Tagbilaran City, Bohol',
                'drop_time' => '10:30 AM',
                'ticket_no' => '878656',
                'passenger_name' => 'Albus Dumbledore', 
                'age' => '35',
               
                
            ],
            [
                'operator' => 'John Wick', 
                'bus_name' => 'Sunrays Bus Lines', 
                'point_of_origin' => 'Looc, Calape, Bohol', 
                'start_time' => '11:30 AM', 
                'destination' => 'Tagbilaran City, Bohol',
                'drop_time' => '1:00 PM',
                'ticket_no' => '675454',
                'passenger_name' => 'James Potter', 
                'age' => '22',
               
                
            ],
            [
                'operator' => 'Ron Weasley', 
                'bus_name' => 'Dragon Lines', 
                'point_of_origin' => 'Bentig, Calape, Bohol', 
                'start_time' => '8:00 AM', 
                'destination' => 'Tagbilaran City, Bohol',
                'drop_time' => '10:00 AM',
                'ticket_no' => '232123',
                'passenger_name' => 'Sirius Black', 
                'age' => '40',
               
                
            ],
           
        ];
        foreach($bookings as $b){
            Booking::create($b);
        }
    }
}




