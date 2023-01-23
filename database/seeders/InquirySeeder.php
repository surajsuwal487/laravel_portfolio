<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('inquiries')->truncate();
        for ($i = 0; $i < 20; $i++) {
            DB::table('inquiries')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'subject' => Str::random(10),
                'message' => Str::random(250),
                'created_at' => now(),
            ]);
        }
    }
}
