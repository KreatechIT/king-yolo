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
            [
                'group' => 'about-page',
                'name' => 'Innovation',
                'payload_type' => 'text',
                'payload' => 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'group' => 'about-page',
                'name' => 'Excellence',
                'payload_type' => 'text',
                'payload' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            ],
            [
                'group' => 'about-page',
                'name' => 'Integrity',
                'payload_type' => 'text',
                'payload' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
            ],
            [
                'group' => 'about-page',
                'name' => 'Collaboration',
                'payload_type' => 'text',
                'payload' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.',
            ],
            [
                'group' => 'about-page',
                'name' => 'Security',
                'payload_type' => 'text',
                'payload' => 'Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt.',
            ],
            [
                'group' => 'about-page',
                'name' => 'Customer Focus',
                'payload_type' => 'text',
                'payload' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis.',
            ]

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
