<?php

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
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
            Store::insert([
                'cat_id' => $faker->randomDigit,
                'title' => $faker->company,
                'description' => $faker->text(40),
                'author' => $faker->name(),
                'thumbnail' => $faker->randomDigit . '.jpg',
                'contact' => $faker->phoneNumber,
                'price' => $faker->numberBetween(100, 500)
            ]);
        endfor;
    }
}
