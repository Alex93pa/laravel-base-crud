<?php

use Illuminate\Database\Seeder;

use App\Comic;
use Faker\Generator as Faker;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Comic::truncate();
        
        $comicsList = config('comics');

        foreach ($comicsList as $comic) {


            $newComic = new Comic(); 

            $comicPrice = 0;

            if (strpos($comic['price'], "$") >= 0) {

                $comicPrice = str_replace("$", "", $comic['price']);
            }
            

            $newComic->fill($comic);

            $newComic->price = $comicPrice;
            $newComic->sale_date = $faker->date();


            $newComic->save(); 

        }
    }
}