<?php

use App\Page;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Page::create([
            'title' => 'contact us',
            'slug' => 'contact-us',
            'content' => $faker->paragraphs(15, true),
        ]);

        Page::create([
            'title' => 'about us',
            'slug' => 'about-us',
            'content' => $faker->paragraphs(15, true),
        ]);

        Page::create([
            'title' => 'our team',
            'slug' => 'our-team',
            'content' => $faker->paragraphs(15, true),
        ]);
    }
}
