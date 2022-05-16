<?php

use Illuminate\Database\Seeder;

use App\Train;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_partenza = $faker->word();
            $newTrain->stazione_arrivo = $faker->word();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice =  $faker->randomNumber(4, true);
            $newTrain->n_carrozze = $faker->randomNumber(2, true);
            $newTrain->is_in_orario = $faker->numberBetween(0, 1);
            $newTrain->is_deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
