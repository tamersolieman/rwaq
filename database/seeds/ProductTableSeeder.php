<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++){
            DB::table('products')->insert([
                'title' => $faker->text($maxNbChars = 100),
                'text' =>$faker->text,
                'price' => $faker->randomNumber(4),
                'user_id' => 1,
                'category_id' => rand(1,3),
                'country_id' => rand(1,10)
            ]);
            
        }
        
    }
}
