<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics_seeder.comics');
        foreach ($comics as $comic) {
            $newProduct = new Comic();
            $newProduct->title = $comic['title'];
            $newProduct->description = $comic['description'];
            $newProduct->thumb = $comic['thumb'];
            $newProduct->price = $comic['price'];
            $newProduct->series = $comic['series'];
            $newProduct->sale_date = $comic['sale_date'];
            $newProduct->type = $comic['type'];
            $newProduct->save();
        }

    }
}
