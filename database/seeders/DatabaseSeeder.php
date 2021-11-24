<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Faker\Factory as Faker;

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
        $faker = Faker::create();

    	foreach (range(1,100) as $index) {
            DB::table('customers')->insert([
                'customer_name' => $faker->name,
                'customer_email' => $faker->email,
                'Customer_mobno' => rand(9100000000,9999999999),
                'Customer_city' => $faker->city,
               
            ]);
        }
    }
}
