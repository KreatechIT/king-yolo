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
            // KINGBOT FAQs
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

            // KINGMEDIA FAQs
            [
                "question" => "Duis aute irure dolor in reprehenderit?",
                "answer" => "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.",
                "category" => "kingmedia",
                "sorting" => 1,
            ],
            [
                "question" => "Ut enim ad minim veniam?",
                "answer" => "Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.",
                "category" => "kingmedia",
                "sorting" => 2,
            ],
            [
                "question" => "How to register on KingMedia?",
                "answer" => "To register, click on the 'Sign Up' button on the homepage and fill in the required details. You will receive a confirmation email upon successful registration.",
                "category" => "kingmedia",
                "sorting" => 3,
            ],
            [
                "question" => "What payment methods are supported?",
                "answer" => "KingMedia supports various payment methods including Visa, MasterCard, and popular e-wallets.",
                "category" => "kingmedia",
                "sorting" => 4,
            ],
            [
                "question" => "What payment methods are supported amount?",
                "answer" => "KingMedia supports various payment methods including Visa, MasterCard, and popular e-wallets.",
                "category" => "kingmedia",
                "sorting" => 5,
            ],

            // KINGPAY FAQs
            [
                "question" => "Duis aute irure dolor in reprehenderit?",
                "answer" => "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.",
                "category" => "kingpay",
                "sorting" => 1,
            ],
            [
                "question" => "Ut enim ad minim veniam?",
                "answer" => "Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.",
                "category" => "kingpay",
                "sorting" => 2,
            ],
            [
                "question" => "How to withdraw funds from KingPay?",
                "answer" => "Go to your dashboard, click on 'Withdraw', select your preferred method, and enter the amount you wish to withdraw.",
                "category" => "kingpay",
                "sorting" => 3,
            ],
            [
                "question" => "Is KingPay secure?",
                "answer" => "Yes, KingPay uses SSL encryption and complies with industry-standard security protocols to protect your transactions.",
                "category" => "kingpay",
                "sorting" => 4,
            ],

            // KINGTECH FAQs
            [
                "question" => "Duis aute irure dolor in reprehenderit?",
                "answer" => "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.",
                "category" => "kingtech",
                "sorting" => 1,
            ],
            [
                "question" => "Ut enim ad minim veniam?",
                "answer" => "Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.",
                "category" => "kingtech",
                "sorting" => 2,
            ],
            [
                "question" => "How to withdraw funds from kingtech?",
                "answer" => "Go to your dashboard, click on 'Withdraw', select your preferred method, and enter the amount you wish to withdraw.",
                "category" => "kingtech",
                "sorting" => 3,
            ],
            [
                "question" => "Is kingtech secure?",
                "answer" => "Yes, kingtech uses SSL encryption and complies with industry-standard security protocols to protect your transactions.",
                "category" => "kingtech",
                "sorting" => 4,
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
