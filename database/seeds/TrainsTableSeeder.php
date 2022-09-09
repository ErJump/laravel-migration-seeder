<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Italo',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '09:00:00',
                'arrival_time' => '10:30:00',
                'train_code' => 'ITA-001',
                'number_of_carriages' => 10,
                'is_in_time' => 1,
                'is_deleted' => 0,
            ],
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Napoli Centale',
                'arrival_station' => 'Firenze Santa Maria Novella',
                'departure_time' => '07:30:00',
                'arrival_time' => '09:00:00',
                'train_code' => 'FR-002',
                'number_of_carriages' => 9,
                'is_in_time' => 0,
                'is_deleted' => 0,
            ],
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Padova',
                'arrival_station' => 'Firenze Santa Maria Novella',
                'departure_time' => '08:00:00',
                'arrival_time' => '10:30:00',
                'train_code' => 'FR-003',
                'number_of_carriages' => 10,
                'is_in_time' => 0,
                'is_deleted' => 1,
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Brescia',
                'departure_time' => '08:30:00',
                'arrival_time' => '09:00:00',
                'train_code' => 'TN-004',
                'number_of_carriages' => 10,
                'is_in_time' => 1,
                'is_deleted' => 0,
            ],
            [
                'company' => 'SporcoTrenino',
                'departure_station' => 'MeglioNo',
                'arrival_station' => 'MaSi',
                'departure_time' => '09:00:00',
                'arrival_time' => '09:30:00',
                'train_code' => 'ST-005',
                'number_of_carriages' => 2,
                'is_in_time' => 1,
                'is_deleted' => 0,
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_deleted = $train['is_deleted'];
            $newTrain->save();
        }
    }
}
