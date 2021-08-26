<?php

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
         $this->call(CommunitySeeder::class);
        //   $this->call(PolingSeeder::class);
        DB::table('poling')->insert([
            'title' => 'Pemilihan Ketua',
            'description' => 'Pemilihan',
            'start_at' => '2021-08-24',
            'stop_at' => '2021-08-25'
        ]);
         $this->call(UserSeeder::class);
         $this->call(CandidateSeeder::class);
    }
}
