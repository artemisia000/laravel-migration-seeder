<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for ($i = 0; $i < 15; $i++) {

            $new_holiday = new Holiday();

            $new_holiday->place = 'Santo Domingo';
            $new_holiday->people_num = 'Santo Domingo';
            $new_holiday->price = '150';
            $new_holiday->date_departure = '12-12-2022';
            $new_holiday->date_return = '12-01-2023';
            $new_holiday->fly = 'Qatar';
            $new_holiday->hotel = 'La Fenice';
            $new_holiday->description = 'lorem ipsum dolor sit amet, consectetur adipisicing elit';
            


            $new_holiday->save();

        }
    }
}
