<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comic){
            $newBook = new Book();
            $newBook->title = $comic['title'];
            $newBook->description = $comic['description'];
            $newBook->thumb = $comic['thumb'];
            $newBook->price = $comic['price'];
            $newBook->series = $comic['series'];
            $newBook->sales_date = $comic['sale_date'];
            $newBook->type = $comic['type'];
            $newBook->save();
        }

    }
}
