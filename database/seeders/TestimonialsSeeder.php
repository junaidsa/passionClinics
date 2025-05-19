<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestimonialsSeeder extends Seeder
{
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Kristin Watson',
                'designation' => 'Co. founder',
                'message' => 'The expertise and care I received here were outstanding. I couldn\'t be happier with my results. Thanks to the team, I feel more confident than ever before. Highly recommend! From consultation to aftercare, everything was perfect. My transformation exceeded my expectations!',
                'avatar' => 'path/to/kristin_watson_',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Brooklyn Simmons',
                'designation' => 'Skin Experts',
                'message' => 'From start to finish, they made the process so easy and stress-free. The results themselves I\'ve never felt better about my appearance. The clinic truly understands beauty!',
                'avatar' => 'testimonial-image.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Darlene Robertson',
                'designation' => 'Co. founder',
                'message' => 'From start to finish, they made the process so easy and stress-free. The results themselves I\'ve never felt better about my appearance. The clinic truly understands beauty!',
                'avatar' => 'testimonial-image.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Arlene McCoy',
                'designation' => 'Co. founder',
                'message' => 'From start to finish, they made the process so easy and stress-free. The results themselves I\'ve never felt better about my appearance. The clinic truly understands beauty!',
                'avatar' => 'testimonial-image.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
