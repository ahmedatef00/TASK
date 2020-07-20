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
            'feature' => 'contact us',
            'content' => $faker->paragraphs(15, true),
        ]);

        Page::create([
            'feature' => 'about us',
            'content' => $faker->paragraphs(15, true),
        ]);

        Page::create([
            'feature' => 'our team',
            'content' => $faker->paragraphs(15, true),
        ]); Page::create([
            'feature' => 'our',
            'content' => $faker->paragraphs(15, true),
        ]); Page::create([
            'feature' => 'our3',
            'content' => $faker->paragraphs(15, true),
        ]);
    }
}
