<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [ 
                'booking_id' => '1',
                'maximum_seats' => '60 Seats',
                'plate_no' => 'CK7878',
                'franchise_no' => '6765-5454'

            ],
            [  
                'booking_id' => '2',
                'maximum_seats' => '55 Seats',
                'plate_no' => 'KD8734',
                'franchise_no' => '1209-7876'

            ],
            [
                'booking_id' => '3',
                'maximum_seats' => '45 Seats',
                'plate_no' => 'VD9567',
                'franchise_no' => '2351-8976'

            ],
            [
                'booking_id' => '4',
                'maximum_seats' => '80 Seats',
                'plate_no' => 'YG7864',
                'franchise_no' => '3245-5378'

            ],
        ];
        foreach($services as $s){
            Service::create($s);
        }
    }
}
