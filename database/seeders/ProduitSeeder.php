<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            DB::table('produits')->insert([
                'npro' => $faker->unique()->randomNumber,
                'libelle' => $faker->sentence(10),
                'prix' => $faker->numberBetween(50,2000),
                'qstock' => $faker->numberBetween(5,30),
                'description' =>$faker->sentence(50)
            ]);
        }

    }
}
