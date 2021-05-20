<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        
        for ($i=0; $i < count($comics); $i++) { 
            $comic = new Comic();
            $comic->title = $comics[$i]['title'];
            $comic->description = $comics[$i]['description'];
            $comic->thumb = $comics[$i]['thumb'];
            $comic->price = $comics[$i]['price'];
            $comic->series = $comics[$i]['series'];
            $comic->sale_date = $comics[$i]['sale_date'];
            $comic->type = $comics[$i]['type'];
            $comic->save();
        }

    }
}
