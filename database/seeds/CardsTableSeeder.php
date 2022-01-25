<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Card;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

    {
         for($i = 0; $i < 30; $i++) {


        $new_card = new Card ();

        $new_card->title = $faker->text(50);
        $new_card->body = $faker->paragraphs(4,true);
       


        $new_card->save();

        }

    }

}