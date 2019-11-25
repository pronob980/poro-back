<?php

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        for ($i = 0; $i <= 30; $i++) :
            Book::insert([
                'cat_id' => $faker->randomDigit,
                'title' => $faker->company,
                'description' => $faker->text(40),
                'author' => $faker->name(),
                'url' => $faker->randomDigit . '.pdf',
                'thumbnail' => $faker->randomDigit . '.jpg',
            ]);
        endfor;
    }
}
