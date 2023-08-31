<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $model = new Movie();
        $temp  = $model::first();
        
        if (!$temp) {
            Movie::insert(
                [
                    [
                        'title' => 'Movie 1',
                        'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 1,
                        'genre_id' => 1,
                        'author_id' => 1,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 2',
                        'summary' => 'Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 1,
                        'genre_id' => 2,
                        'author_id' => 2,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 3',
                        'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        'cover_image' => null,
                        'user_id' => 2,
                        'genre_id' => 3,
                        'author_id' => 3,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 4',
                        'summary' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 3,
                        'genre_id' => 3,
                        'author_id' => 4,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 5',
                        'summary' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 3,
                        'genre_id' => 4,
                        'author_id' => 5,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 6',
                        'summary' => 'Eeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 3,
                        'genre_id' => 4,
                        'author_id' => 6,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 7',
                        'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 2,
                        'genre_id' => 5,
                        'author_id' => 5,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 8',
                        'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 1,
                        'genre_id' => 8,
                        'author_id' => 1,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 9',
                        'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 3,
                        'genre_id' => 8,
                        'author_id' => 4,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'title' => 'Movie 10',
                        'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                        'cover_image' => null,
                        'user_id' => 2,
                        'genre_id' => 7,
                        'author_id' => 5,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                ]
            );
        }
    }
}
