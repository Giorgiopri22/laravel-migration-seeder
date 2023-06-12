<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Train::create([
            'company' => 'Azienda 1',
            'departure_station' => 'Stazione A',
            'arrival_station' => 'Stazione B',
            'departure_time' => '09:00:00',
            'arrival_time' => '10:30:00',
            'train_code' => 'ABC123',
            'number_of_coaches' => 5,
            'on_time' => true,
            'cancelled' => false,
        ]);

        Train::create([
        'company' => 'Azienda 2',
        'departure_station' => 'Stazione c',
        'arrival_station' => 'Stazione d',
        'departure_time' => '09:00:00',
        'arrival_time' => '10:30:00',
        'train_code' => 'ABC123',
        'number_of_coaches' => 5,
        'on_time' => true,
        'cancelled' => false,
    ]);
    }
}
