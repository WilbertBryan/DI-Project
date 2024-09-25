<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('infos')->insert([
            [
                'title' => 'Epic National 2024',
                'category' => 'open-recruitment',
                'image_path' => 'image/oprec-epic.png',
                'short_description' => 'Lorem ipsum dolor sit amet. Qui ipsa modi aut doloribus consequuntur sed internos optio ut beatae error ut corporis placeat est molestias galisum nam quidem quidem.',
                'long_description' => 'Lorem ipsum dolor sit amet. Qui ipsa modi aut doloribus consequuntur sed internos optio ut beatae error ut corporis placeat est molestias galisum nam quidem quidem. Ut distinctio quod eum quod reprehenderit a praesentium voluptas ut velit vero qui dignissimos magni. Hic sint veritatis non maxime quas et assumenda consequatur ut velit dolore qui enim voluptate in placeat praesentium. Ut voluptatibus asperiores nam dolores ipsam ut laudantium quas ut dignissimos quia hic eaque iure ea architecto tenetur et minima eius.

                Ut consequatur nesciunt sit distinctio rerum rem ratione beatae id ducimus facilis aut deleniti cumque sit internos perspiciatis et dicta atque. Et animi veniam eum quia nisi eum eaque repudiandae et quis quia et minima atque aut alias quas qui quae maiores. Quo galisum debitis est alias repellat est dolorem officiis vel eius laudantium.',
                'register' => 'https://docs.google.com/forms/d/e/1FAIpQLSc4eURpoA2oX5RW2W9dtoarkLrR9V2_V3jl9DVc_EU7dj-qZA/closedform',
                'download' => 'http://example.com/download1',
                'website' => 'https://www.epic.com',
                'instagram' => 'https://www.instagram.com/ucepic',
                'whatsapp' => '621234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'LO Kreatif 2024',
                'category' => 'lomba',
                'image_path' => 'image/lokreatif.png',
                'short_description' => 'Lorem ipsum dolor sit amet. Qui ipsa modi aut doloribus consequuntur sed internos optio ut beatae error ut corporis placeat est molestias galisum nam quidem quidem.',
                'long_description' => 'This is the long description for Info 2.',
                'register' => 'https://docs.google.com/forms/d/e/1FAIpQLSc4eURpoA2oX5RW2W9dtoarkLrR9V2_V3jl9DVc_EU7dj-qZA/closedform',
                'download' => 'http://example.com/download2',
                'website' => 'https://lokreatif.org',
                'instagram' => 'https://instagram.com/example2',
                'whatsapp' => '621234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'AI-Enhanced Next-Gen Smart Glasses Could Revolutionize Wearables',
                'category' => 'berita',
                'image_path' => 'image/portfolio-1.png',
                'short_description' => 'The 2014 Google Glass debacle stigmatized smart glasses, but the devices may be poised for a comeback.',
                'long_description' => 'Despite the flaming failure of Google Glass, Meta and Google appear to be all in on the next generation of smart glasses that combine fashion, functionality, and generative AI into a compelling form factor, maintained Gene Munster, managing partner of Deepwater Asset Management, a venture capital firm in Minneapolis.

                Writing on the firms website Friday, Munster noted, “I believe the reason for their optimism is a combination of recognizing consumers gravitate to easy-to-use tech along with greater confidence in what generative AI can add to the equation.”',
                'register' => '',
                'download' => '',
                'website' => 'https://www.technewsworld.com/story/ai-enhanced-next-gen-smart-glasses-could-revolutionize-wearables-179339.html',
                'instagram' => '',
                'whatsapp' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}
