<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            ['id' => 1, 'title' => 'Post One', 'desc' => 'Desc One', 'status' => '1' ],
            ['id' => 2, 'title' => 'Post Two', 'desc' => 'Desc Two', 'status' => '0' ],
            ['id' => 3, 'title' => 'Post Three', 'desc' => 'Desc Three', 'status' => '0' ],
            ['id' => 4, 'title' => 'Post Four', 'desc' => 'Desc Four', 'status' => '1' ],
            ['id' => 5, 'title' => 'Post Five', 'desc' => 'Desc Five', 'status' => '1' ]
        ];
        
        Post::insert($posts);
    }
}
