<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker; //Data Faker

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            // Insert to database using faker
            DB::table('products')->insert([
                'product_name' => $faker->word,
                'product_description' => $faker->sentence,
                'product_quantity' => $faker->number,
                'product_price' => $faker->number,
            ])
        }
    }
}
