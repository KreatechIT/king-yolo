<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "question" => "Lorem ipsum dolor sit amet?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at fermentum elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.",
                "category" => "kingbot",
                "sorting" => 1,
            ],
            [
                "question" => "Consectetur adipiscing elit sed do?",
                "answer" => "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nullam quis risus eget urna mollis ornare vel eu leo.",
                "category" => "kingbot",
                "sorting" => 2,
            ],
            [
                "question" => "Elusmod tempor incididunt ut labore?",
                "answer" => "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Aenean lacinia bibendum nulla sed consectetur.",
                "category" => "kingbot",
                "sorting" => 3,
            ],
            [
                "question" => "Ut enim ad minim veniam?",
                "answer" => "Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.",
                "category" => "kingbot",
                "sorting" => 4,
            ],
            [
                "question" => "Duis aute irure dolor in reprehenderit?",
                "answer" => "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.",
                "category" => "kingbot",
                "sorting" => 5,
            ],
        ];

        foreach ($data as $item) {
            Faq::updateOrCreate(
                [
                    'category' => $item['category'],
                    'question' => $item['question'],
                ],
                [
                    'answer' => $item['answer'],
                    'sorting' => $item['sorting'],
                ]
            );
        }
    }
}
