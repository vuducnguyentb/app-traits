<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);
        foreach (range(1,10) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email
            ]);
        }
    }
}
