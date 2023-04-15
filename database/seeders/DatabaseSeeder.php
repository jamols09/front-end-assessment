<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Author::factory(30)->create();
        Book::factory(100)->create();

        $author = Author::all();

        Book::all()->each(function ($book) use ($author) {
            $book->authors()->attach(
                $author->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
