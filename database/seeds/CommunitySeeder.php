<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 3) as $value) {
            DB::table('community')->insert([
                'name' => $faker->company,
                'description' => $faker->paragraph,
                'phone' => $faker->e164PhoneNumber,
            ]);
        }
    }
}
