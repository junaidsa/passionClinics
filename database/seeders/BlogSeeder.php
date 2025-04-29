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
                'description' => 'Top Tips for Preparing for Plastic Surgery',
                'short_description' => 'Top Tips for Preparing for Plastic Surgery',
                'image' => 'service-image-5.jpg', // update the correct image path
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Top Tips for Preparing for Plastic Surgery',
                'short_description' => 'Myths and Facts About Plastic Surgery',
                'image' => 'service-image-5.jpg', // update the correct image path
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'description' => 'Top Tips for Preparing for Plastic Surgery',
                'short_description' => 'What to Expect During Your First Consultation',
                'image' => 'service-image-4.jpg', // update the correct image path
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
