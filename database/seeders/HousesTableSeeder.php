<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\House;
use App\Functions\Helpers as Help;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //con json
        // $houses = file_get_contents('data.json');
        // $houses = json_decode($houses, true);

        //con array php in config
        //$houses = config('nomefile');

        //con file csv
        // $houses = Help::getCsvData(__DIR__ . '/immo.csv');
        // dd($houses);

        for ($i = 0; $i < 50; $i++) {
            $newHouse = new House();
            $newHouse->title = $faker->words(5, true);
            $newHouse->address = $faker->address();
            $newHouse->postal_code = $faker->postcode();
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->state();
            $newHouse->square_meters = $faker->numberBetween(40, 500);
            $newHouse->rooms = $faker->randomDigitNotNull();
            $newHouse->bathrooms = $faker->randomDigitNotNull();
            $newHouse->garage = $faker->randomDigitNotNull();
            $newHouse->price = $faker->randomFloat(1, 20000, 300000);
            $newHouse->description = $faker->paragraph();
            $newHouse->save();
        }

        // foreach ($houses as $index => $row) {
        //     //dd($row, $index);
        //     if ($index !== 0) {
        //         $house = new House();
        //         $house->image = $row[5];
        //         $house->reference = $row[1];
        //         $house->address = $row[2];
        //         $house->postal_code = $row[3];
        //         $house->city = $row[4];
        //         $house->state = $row[5];
        //         $house->square_meters = $row[6];
        //         $house->rooms = $row[7];
        //         $house->bathrooms = $row[8];
        //         $house->type = $row[9];
        //         $house->description = $row[4];
        //         $house->price = $row[3];
        //         $house->is_available = $row[12];
        //         $house->energy_rating = $row[13];
        //         $house->save();
        //     }
        // }

    }
}