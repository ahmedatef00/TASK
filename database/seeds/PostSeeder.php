<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 1; $j++) {
                Post::create([
                    "user_id" => "$i",
                    "title" => "post : $j",
                    "short_brief" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                    "read_more" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa labore necessitatibus nemo at corrupti? Corrupti voluptates rerum laborum facere, id voluptas natus amet voluptate asperiores, dolorum nihil repellendus animi officiis?",
                    "img" => "$i$j.jpeg",
                ]);
            }
        }
    }
}
