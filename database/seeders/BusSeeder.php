<?php

namespace Database\Seeders;
use App\Models\Bus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buses = [
            [
                'bus_name' => 'Ceres Bus Lines',        

            ],
            [
                'bus_name' => 'Charter Bus Co',
            ],
            [
                'bus_name' => 'Sunrays Bus Lines',

            ],
            [
                'bus_name' => 'Dragon Lines',

            ],
        ];
        foreach($buses as $b){
            Bus::create($b);
        }
    }
}
