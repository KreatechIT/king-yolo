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
            // KINGBOT FEEDBACK
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
                "designation" => "Branch Manager, Community Credit Union",
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

            // KINGMEDIA FEEDBACK
            [
                "name" => "Samuel Davis",
                "designation" => "Senior Analyst, Capital Trust",
                "category" => "kingmedia",
                "rating" => 1,
                "message" => "The seamless integration with our legacy systems saved us months of development time. KingBot truly understands banking needs."
            ],
            [
                "name" => "Jessica Lin",
                "designation" => "Marketing Director, MediaCorp",
                "category" => "kingmedia",
                "rating" => 5,
                "message" => "KingMedia has transformed our content delivery process. Engagement rates have doubled since implementation, and campaign management is now effortless."
            ],
            [
                "name" => "Carlos Sanchez",
                "designation" => "CEO, DigitalWave",
                "category" => "kingmedia",
                "rating" => 4,
                "message" => "We now have full control over our media pipelines. KingMedia’s analytics features provide insights that help us optimize our advertising strategy."
            ],
            [
                "name" => "Carlos Sanchez AX",
                "designation" => "CEO, DigitalWave",
                "category" => "kingmedia",
                "rating" => 5,
                "message" => "We now have full control over our media pipelines. KingMedia’s analytics features provide insights that help us optimize our advertising strategy."
            ],

            // KINGPAY FEEDBACK
            [
                "name" => "Samuel Davis",
                "designation" => "Senior Analyst, Capital Trust",
                "category" => "kingpay",
                "rating" => 1,
                "message" => "The seamless integration with our legacy systems saved us months of development time. KingBot truly understands banking needs."
            ],
            [
                "name" => "Sophia Reynolds",
                "designation" => "Finance Director, PayFast Ltd",
                "category" => "kingpay",
                "rating" => 5,
                "message" => "KingPay has drastically reduced our transaction fees. The platform is user-friendly and settlements are processed instantly."
            ],
            [
                "name" => "Liam Patel",
                "designation" => "Operations Manager, Swift Payments",
                "category" => "kingpay",
                "rating" => 4,
                "message" => "We switched to KingPay for its multi-currency support. Our international customers now enjoy a seamless payment experience."
            ],
            [
                "name" => "Liam Patel A",
                "designation" => "Operations Manager, Swift Payments",
                "category" => "kingpay",
                "rating" => 5,
                "message" => "We switched to KingPay for its multi-currency support. Our international customers now enjoy a seamless payment experience."
            ],

            // GENERAL FEEDBACK 
            [
                "name" => "Michael Chen",
                "designation" => "CTO, FinanceFirst Bank",
                "category" => "general",
                "rating" => 4,
                "message" => "KingBot transformed our banking operations completely. What used to take hours now happens in minutes. The automation is flawless and the security features give us complete peace of mind."
            ],
            [
                "name" => "Jane Smith",
                "designation" => "Product Manager, SmartTech Solutions",
                "category" => "general",
                "rating" => 5,
                "message" => "Amazing tool! It has streamlined our workflows, and we’re seeing faster results with fewer errors."
            ],
            [
                "name" => "Michael Johnson",
                "designation" => "CEO, Innovate Ltd",
                "category" => "general",
                "rating" => 3,
                "message" => "The system works well, but we’d love to see more customization options to suit our unique needs."
            ],
            [
                "name" => "Emily Davis",
                "designation" => "Operations Head, DigitalWorks",
                "category" => "general",
                "rating" => 5,
                "message" => "Exceptional service! We’ve improved our internal communication and collaboration across departments."
            ],
            [
                "name" => "David Lee",
                "designation" => "CTO, FutureTech Innovations",
                "category" => "general",
                "rating" => 4,
                "message" => "Great performance overall. Integration was smooth, and the analytics features help us make informed decisions."
            ],

             // KINGTECH FEEDBACK 
            [
                "name" => "Michael Chen",
                "designation" => "CTO, FinanceFirst Bank",
                "category" => "kingtech",
                "rating" => 4,
                "message" => "KingBot transformed our banking operations completely. What used to take hours now happens in minutes. The automation is flawless and the security features give us complete peace of mind."
            ],
            [
                "name" => "Jane Smith",
                "designation" => "Product Manager, SmartTech Solutions",
                "category" => "kingtech",
                "rating" => 5,
                "message" => "Amazing tool! It has streamlined our workflows, and we’re seeing faster results with fewer errors."
            ],
            [
                "name" => "Michael Johnson",
                "designation" => "CEO, Innovate Ltd",
                "category" => "kingtech",
                "rating" => 3,
                "message" => "The system works well, but we’d love to see more customization options to suit our unique needs."
            ],
            [
                "name" => "Emily Davis",
                "designation" => "Operations Head, DigitalWorks",
                "category" => "kingtech",
                "rating" => 5,
                "message" => "Exceptional service! We’ve improved our internal communication and collaboration across departments."
            ],
            [
                "name" => "David Lee",
                "designation" => "CTO, FutureTech Innovations",
                "category" => "kingtech",
                "rating" => 4,
                "message" => "Great performance overall. Integration was smooth, and the analytics features help us make informed decisions."
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
