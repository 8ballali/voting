<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avatar = Storage::fake('avatars');
        $faker = Faker::create();
        foreach (range(1, 3) as $value) {
            DB::table('candidate')->insert([
                'name' => $faker->name,
                'visi' => $faker->paragraph,
                'misi' => $faker->paragraph,
                'alamat' => $faker->address,
                'ttl' => $faker->city .', '.$faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->randomElement(['laki-laki', 'perempuan']),
                'user_phone' => $faker->e164PhoneNumber,
                'file' => '-',
                'avatar' => '-',
                'poling_id'=> 1,
                'community_id'=> rand(1, 3)
            ]);
        }
    }
}
