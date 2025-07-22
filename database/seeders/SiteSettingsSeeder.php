<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'group' => 'general-settings',
                'name' => 'site_description',
                'payload_type' => 'text',
                'payload' => 'Transforming businesses through innovative digital solutions.',
            ],
            [
                'group' => 'general-settings',
                'name' => 'site_email',
                'payload_type' => 'text',
                'payload' => 'info@kingyolo.com',
            ],
            [
                'group' => 'general-settings',
                'name' => 'site_phone',
                'payload_type' => 'text',
                'payload' => '+1 (555) 123-4567',
            ],
            [
                'group' => 'general-settings',
                'name' => 'site_address',
                'payload_type' => 'text',
                'payload' => '123 Digital Street, Tech City',
            ],
            [
                'group' => 'general-settings',
                'name' => 'social_link_telegram',
                'payload_type' => 'text',
                'payload' => '#',
            ],
            [
                'group' => 'general-settings',
                'name' => 'social_link_wechat',
                'payload_type' => 'text',
                'payload' => '#',
            ],
            [
                'group' => 'general-settings',
                'name' => 'social_link_whatsapp',
                'payload_type' => 'text',
                'payload' => '#',
            ],
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
