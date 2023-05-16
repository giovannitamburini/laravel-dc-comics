<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');

        foreach ($arrayComics as $singleComic) {

            $newComic = new Comic();

            $newComic->title = $singleComic['title'];
            $newComic->description = $singleComic['description'];
            $newComic->thumb = $singleComic['thumb'];
            $newComic->price = $singleComic['price'];
            $newComic->series = $singleComic['series'];
            $newComic->sale_date = $singleComic['sale_date'];
            $newComic->type = $singleComic['type'];
            $newComic->artists = implode(',', $singleComic['artists']);
            $newComic->writers = implode(',', $singleComic['writers']);

            $newComic->save();
        }
    }
}
