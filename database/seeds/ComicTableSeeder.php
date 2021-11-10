<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics_example");
        foreach($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->type = $comic["type"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->price = $comic["price"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->save();
        }
    }
}
