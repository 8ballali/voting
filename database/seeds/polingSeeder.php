<?php

use Illuminate\Database\Seeder;

class PolingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poling')->insert([
            'title' => 'Pemilihan Ketua',
            'description' => 'Pemilihan',
            'start_at' => '2021-08-27',
            'stop_at' => '2021-08-28'
        ]);
    }
}
