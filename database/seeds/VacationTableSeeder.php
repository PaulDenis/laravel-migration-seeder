<?php

use Illuminate\Database\Seeder;
use App\Vacation;

class VacationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Dubai_Family',
                'description' => "A trip to Dubai for your entire family. 4 stars hotel, breackfast included.",
                'spots_avalable' => "22",
                'cost' => '799.99',
                'from' => 'Fiumicino',
                'departure' => '2021-09-09',
                'to' => 'Dubai',
                'arrival' => '2021-09-09',
                'n_of_persons' => '4',
                'duration' => '7'
            ],
            [
                'name' => 'Japan_Couples',
                'description' => "A trip to Tokyo for young couples. 5 stars Hotel, turistic guide and more.",
                'spots_avalable' => "16",
                'cost' => '2200.00',
                'from' => 'Bologna',
                'departure' => '2021-09-12',
                'to' => 'Tokyo',
                'arrival' => '2021-09-12',
                'n_of_persons' => '2',
                'duration' => '7'
            ],
            [
                'name' => 'Madrid_Group',
                'description' => "A vacation to Madrid for a group of 6 people.",
                'spots_avalable' => "47",
                'cost' => '1599.99',
                'from' => 'Bologna',
                'departure' => '2021-08-10',
                'to' => 'Madrid',
                'arrival' => '2021-08-10',
                'n_of_persons' => '6',
                'duration' => '7'
            ],
            [
                'name' => 'Hawaii_Couples',
                'description' => "A trip to Hawaii for couples. Spend the holydays in a warm, peacefull place.",
                'spots_avalable' => "13",
                'cost' => '350.00',
                'from' => 'Fiumicino',
                'departure' => '2021-12-20',
                'to' => 'Hawaii',
                'arrival' => '2021-12-20',
                'n_of_persons' => '2',
                'duration' => '4'
            ],
            [
                'name' => 'Dublin_Couples',
                'description' => "A trip to Dublin for couples. 3 stars hotel, breackfast included.",
                'spots_avalable' => "4",
                'cost' => '157.00',
                'from' => 'Fiumicino',
                'departure' => '2021-08-21',
                'to' => 'Dublin',
                'arrival' => '2021-08-21',
                'n_of_persons' => '2',
                'duration' => '3'
            ],
            
        ];

        foreach ($data as $trip) {
            $package = new Vacation();

            $package-> name = $trip['name'];
            $package-> description = $trip['description'];
            $package-> spots_avalable = $trip['spots_avalable'];
            $package-> cost = $trip['cost'];
            $package-> from = $trip['from'];
            $package-> departure = $trip['departure'];
            $package-> to = $trip['to'];
            $package-> arrival = $trip['arrival'];
            $package-> n_of_persons = $trip['n_of_persons'];
            $package-> duration = $trip['duration'];

            $package->save();
        }
        
    }
}
