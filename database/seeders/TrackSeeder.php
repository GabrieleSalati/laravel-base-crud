<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Track;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 30; $i++) {
            $newTrack = new Track;
            $newTrack->title = $faker->company();
            $newTrack->album = $faker->streetName();
            $newTrack->author = $faker->name();
            $newTrack->editor = $faker->name();
            $newTrack->length = $faker->randomFloat(2, 0, 1);
            $newTrack->poster = "https://picsum.photos/200/100";

            $newTrack->save();
        };
    }
}
