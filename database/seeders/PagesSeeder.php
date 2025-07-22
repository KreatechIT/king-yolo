<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings;
use App\Models\Pages;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'group' => 'about-page',
                'name' => 'our-mission',
                'payload_type' => 'text',
                'payload' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'group' => 'about-page',
                'name' => 'our-vision',
                'payload_type' => 'text',
                'payload' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'group' => 'about-page',
                'name' => 'Happy Clients',
                'payload_type' => 'text',
                'payload' => '500+',
            ],
            [
                'group' => 'about-page',
                'name' => 'Countries Served',
                'payload_type' => 'text',
                'payload' => '50+',
            ],
            [
                'group' => 'about-page',
                'name' => 'Uptime Guarantee',
                'payload_type' => 'text',
                'payload' => '99.9%',
            ],
            [
                'group' => 'about-page',
                'name' => 'Support Available',
                'payload_type' => 'text',
                'payload' => '24/7',
            ],
           
        ];


        foreach ($data as $item) {
            Pages::updateOrCreate(
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
