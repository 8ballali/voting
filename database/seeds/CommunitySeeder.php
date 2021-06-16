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
            'name' => 'WOW JATENG',
            'description' => 'WULING OWNER JAWA TENGAH',
            'phone' => '082240541121'
        ]);
    }
}
