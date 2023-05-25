<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\House;

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
        // $houses = $this->getCsvData(__DIR__ . '/houses.csv');
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

        //  foreach ($houses as $index => $row) {
// 		        //dd($row, $index);
// 		        if ($index !== 0) {
// 		            $house = new House();
// 		            $house->image = $row[0];
// 		            $house->reference = $row[1];
// 		            $house->address = $row[2];
// 		            $house->postal_code = $row[3];
// 		            $house->city = $row[4];
// 		            $house->state = $row[5];
// 		            $house->square_meters = $row[6];
// 		            $house->rooms = $row[7];
// 		            $house->bathrooms = $row[8];
// 		            $house->type = $row[9];
// 		            $house->description = $row[10];
// 		            $house->price = $row[11];
// 		            $house->is_available = $row[12];
// 		            $house->energy_rating = $row[13];
// 		            $house->save();
// 		        }
// 		    }
// 		}




        //
    }
    public function getCsvData(string $path)
    {
        // Crea un'array vuota
        $data = [];

        // Apri il file stream in lettura
        $file_stream = fopen($path, 'r');

        // Verifica se il file non é stato aperto e mostra errore
        if ($file_stream === false) {
            exit('Cannot open the file ' . $path);
        }

        // leggi le singole righe del csv fino alla fine
        // fgetcsv restituisce o l'array o false
        while (($row = fgetcsv($file_stream)) !== false) {
            // salva ciascuna riga come elemento dell'array
            $data[] = $row;
        }

        // chiudi il file
        fclose($file_stream);
        // restituisci i dati
        return $data;
    }
}