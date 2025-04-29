<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'description' => '',
                'short_description' => 'Top Tips for Preparing for Plastic Surgery',
                'image' => 'path/to/your/image1.jpg', // update the correct image path
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => '',
                'short_description' => 'Myths and Facts About Plastic Surgery',
                'image' => 'path/to/your/image2.jpg', // update the correct image path
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => '',
                'short_description' => 'What to Expect During Your First Consultation',
                'image' => 'path/to/your/image3.jpg', // update the correct image path
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
