<?php

use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidate')->insert([
            'name' => 'Pak Budi',
            'visi' => 'RaacscsacCS',
            'misi' => 'ascsacsc',
            'alamat' => 'dimanasaja',
            'ttl' => "Mars",
            'gender' => "Laki",
            'user_phone' => '21351245',
            'user_id' => '2',
            'file' => 'pendafataran.txt',
            'poling_id'=> '1'
        ]);
    }
}
