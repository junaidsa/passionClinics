<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'            => 'Dr. ABCD Doe',
            'email'           => 'drq.john111@example.com',
            'email_verified_at' => now(),
            'password'        => Hash::make('password123'),
            'role'            => 'doctor',
            'remember_token'  => Str::random(10),
            'created_at'      => now(),
            'updated_at'      => now(),
            'service_id'      => 3,
            'image'           => 'default.jpg',
            'experience'      => '10 years',
            'about'           => 'Experienced general physician.',
            'personals_info'  => 'MBBS, MD',
            'x_url'           => 'https://x.com/drjohn',
            'fb_url'          => 'https://facebook.com/drjohn',
            'ins_url'         => 'https://instagram.com/drjohn',
            'phone'           => '+1234567890',
            'address'         => '123 Health St, Wellness City'
        ]);
    }
}
