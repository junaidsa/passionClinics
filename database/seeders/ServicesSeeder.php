<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title' => 'Body Sculpting And Liposuction',
                'sub_title' => 'Enhance Your Body Shape',
                'short_description' => 'Targeted fat removal and body contouring solutions.',
                'description' => 'This group of surgical and non-surgical body contouring procedures is aimed at enhancing the body\'s natural shape by removing unwanted fat and tightening the skin.',
                'main_image' => 's2-320x389.jpg',
                'video_thumbnail' => 'servie-entry-video-image.jpg',
                'video_url' => 'https://www.youtube.com/shorts/BogoqKnfG-c',
                'timing' => '2-3 hours',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Breast Augmentation Surgery',
                'sub_title' => 'Feel Confident Again',
                'short_description' => 'Personalized breast enhancement surgeries.',
                'description' => 'We offer comprehensive breast augmentation options, providing a natural and proportionate enhancement tailored to each individual’s goals and body type.',
                'main_image' => 'service-image-1.jpg',
                'video_thumbnail' => 'servie-entry-video-image.jpg',
                'video_url' => 'https://example.com/breast-augmentation-video',
                'timing' => '1-2 hours',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Body Tightening',
                'sub_title' => 'Restore Firmness',
                'short_description' => 'Non-surgical treatments for firmer skin.',
                'description' => 'Non-invasive skin tightening treatments to lift and firm sagging skin, restoring youthful contours without the need for surgery.',
                'main_image' => 'service-image-1.jpg',
                'video_thumbnail' => 'servie-entry-video-image.jpg',
                'video_url' => 'https://www.youtube.com/shorts/BogoqKnfG-c',
                'timing' => '45 minutes to 1 hour',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Facial Procedures, Facelift with Threads',
                'sub_title' => 'Restore Firmness',
                'short_description' => 'Non-surgical treatments for firmer skin.',
                'description' => 'Non-invasive skin tightening treatments to lift and firm sagging skin, restoring youthful contours without the need for surgery.',
                'main_image' => 'service-image-1.jpg',
                'video_thumbnail' => 'servie-entry-video-image.jpg',
                'video_url' => 'https://www.youtube.com/shorts/BogoqKnfG-c',
                'timing' => '45 minutes to 1 hour',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            // Add more entries for Gastric Surgery, Facial Procedures, Facelift with Threads, etc...
        ]);
    }
}
