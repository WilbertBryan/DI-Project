<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kontens')->insert([
            [
                'title' => 'Episode 1: Welcome to ISB!',
                'youtube' => 'https://www.youtube.com/embed/qqe4ZXC6HuY?si=PwapZvN_JgxwuuM_&autoplay=1&mute=1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
