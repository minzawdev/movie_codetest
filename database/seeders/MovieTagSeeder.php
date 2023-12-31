<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MovieTag;
use Carbon\Carbon;

class MovieTagSeeder extends Seeder
{
    public function run(): void
    {
        $model = new MovieTag();
        $temp  = $model::first();

        if (!$temp) {
            MovieTag::insert([
                [
                    'movie_id' => 1,
                    'tag_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 2,
                    'tag_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 3,
                    'tag_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 3,
                    'tag_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 4,
                    'tag_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 5,
                    'tag_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 6,
                    'tag_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 7,
                    'tag_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 8,
                    'tag_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 9,
                    'tag_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'movie_id' => 10,
                    'tag_id' => 4,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
            ]);
        }
    }
}
