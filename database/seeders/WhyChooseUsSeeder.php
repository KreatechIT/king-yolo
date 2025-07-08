<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings;

class WhyChooseUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'group' => 'why-choose-us',
                'name' => 'Integrity',
                'payload_type' => 'text',
                'payload' => 'Integrity is the bedrock upon which OrionMano is built. We believe in conducting business with the highest standards of honesty, transparency, and ethical conduct. Our clients trust us not only for our technical expertise but also for our unwavering commitment to doing what is right so that our clients',
            ],
            [
                'group' => 'why-choose-us',
                'name' => 'Innovation',
                'payload_type' => 'text',
                'payload' => 'Embrace creative ideas, dedication to continuous learning, tly seeking innovative ways to advance SEO strategies and IT solutions, staying at the forefront of industry trends.',
            ],
            [
                'group' => 'why-choose-us',
                'name' => 'Why use Blackrevo',
                'payload_type' => 'text',
                'payload' => 'Here are some qualities that should help you to be even more confident that we are the best fit for you. Hover over or click on the stars to the left and further understand why.'
            ]
        ];


        foreach ($data as $item) {
            Settings::updateOrCreate(
                [
                    'group' => $item['group'],
                    'name' => $item['name'],
                ],
                [
                    'payload_type' => $item['payload_type'],
                    'payload' => $item['payload'],
                ]
            );
        }
    }
}
