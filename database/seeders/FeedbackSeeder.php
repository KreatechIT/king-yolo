<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            [
                "name" => "James Mitchell",
                "designation" => "Head of Operations, Metropolitan Bank",
                "category" => "kingbot",
                "rating" => 4,
                "message" => "KingBot reduced our transaction processing time by 85%. The AI-powered automation handles complex banking operations flawlessly. Our customers are amazed by the instant service."
            ],
            [
                "name" => "Elena Petrov",
                "designation" => "Compliance Officer, SecureBank Ltd",
                "category" => "kingbot",
                "rating" => 4,
                "message" => "The compliance features are exceptional. KingBot automatically handles all regulatory requirements while maintaining the highest security standards. It’s a game-changer for our industry."
            ],
            [
                "name" => "Marcus Garcia",
                "designation" => "Marcus Garcia Branch Manager, Community Credit Union",
                "category" => "kingbot",
                "rating" => 5,
                "message" => "Implementation was smooth and the training was comprehensive. Our staff adapted quickly and now they can focus on high-value customer relationships instead of routine tasks."
            ],
            [
                "name" => "Nina Liu",
                "designation" => "Customer Experience Director, Global Finance",
                "category" => "kingbot",
                "rating" => 5,
                "message" => "The 24/7 operation capability is incredible. Our customers can complete complex transactions anytime, and the system never sleeps. Customer satisfaction has increased by 60%."
            ],
            [
                "name" => "Rachel Huang",
                "designation" => "IT Manager, Horizon Bank",
                "category" => "kingbot",
                "rating" => 5,
                "message" => "KingBot’s intuitive dashboard lets us monitor all processes in real-time. It has boosted our team’s efficiency tremendously."
            ],
            [
                "name" => "Samuel Davis",
                "designation" => "Senior Analyst, Capital Trust",
                "category" => "kingbot",
                "rating" => 5,
                "message" => "The seamless integration with our legacy systems saved us months of development time. KingBot truly understands banking needs."
            ],
        ];

        foreach ($data as $item) {
            Feedback::updateOrCreate(
                [
                    'category' => $item['category'],
                    'name' => $item['name'],
                ],
                [
                    'designation' => $item['designation'],
                    'rating' => $item['rating'],
                    'message' => $item['message'],
                ]
            );
        }
    }
}
