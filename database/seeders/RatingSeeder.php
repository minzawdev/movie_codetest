<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;
use Carbon\Carbon;

class RatingSeeder extends Seeder
{
    public function run(): void
    {
        $model = new Rating();

        $temp  = $model::first();

        if (!$temp) {
            Rating::insert([
                [
                    'rate' => 1,
                    'user_id' => 1,
                    'movie_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'rate' => 2,
                    'user_id' => 1,
                    'movie_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'rate' => 3,
                    'user_id' => 2,
                    'movie_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'rate' => 4,
                    'user_id' => 2,
                    'movie_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'rate' => 5,
                    'user_id' => 3,
                    'movie_id' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'rate' => 4,
                    'user_id' => 3,
                    'movie_id' => 6,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            ]);
        }
    }
}
