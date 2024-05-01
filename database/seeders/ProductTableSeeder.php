<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

       for($i=1;$i<=100;$i++){
            DB::table('products')->insert([
                'image' => $faker->imageUrl($width = 640, $height = 480), // Définit des dimensions pour l'image
                'nom' => $faker->sentence(),
                'description' => $faker->paragraph,
                'prix' => $faker->numberBetween(100000, 300000),
                'id_categorie' => $faker->numberBetween(1, 3),
            ]);
       }
    }
}
