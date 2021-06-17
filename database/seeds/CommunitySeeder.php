<?php

use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('community')->insert([
            'name' => 'ACS',
            'description' => 'Admin Kosmos',
            'phone' => '082223326818'
        ]);
    }
}
