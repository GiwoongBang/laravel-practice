<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('posts')->insert([
//            'subject' => "first seeding subject",
//            'content' => 'this is content'
//        ]);

        $faker = Faker::create();
        for ($i = 0; $i < 177; $i++) {
            DB::table('posts')->insert([
                'subject' => $faker->sentence(5),
                'content' => $faker->paragraph(7),
                'email' => $faker->email(),
                'name' => $faker->name()
            ]);
        }
    }
}
