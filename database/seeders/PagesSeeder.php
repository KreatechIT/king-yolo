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
                'group' => 'pages',
                'name' => 'privacy-policy',
                'payload_type' => 'text',
                'payload' => 'Upload Content',
            ],
            [
                'group' => 'pages',
                'name' => 'terms-conditions',
                'payload_type' => 'text',
                'payload' => 'Upload Content',
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
