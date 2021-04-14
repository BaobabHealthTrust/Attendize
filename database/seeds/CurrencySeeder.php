<?php

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'id' => 1,
                'title' => 'Malawi Kwacha',
                'symbol_left' => 'MWK',
                'symbol_right' => '',
                'code' => 'MWK',
                'decimal_place' => 2,
                'value' => 0.00,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2015-07-22 23:25:30',
                'updated_at' => '2015-07-22 23:25:30',
            ],
            [
                'id' => 2,
                'title' => 'U.S. Dollar',
                'symbol_left' => '$',
                'symbol_right' => '',
                'code' => 'USD',
                'decimal_place' => 2,
                'value' => 1.00000000,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ],
            [
                'id' => 3,
                'title' => 'Euro',
                'symbol_left' => '€',
                'symbol_right' => '',
                'code' => 'EUR',
                'decimal_place' => 2,
                'value' => 0.74970001,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ],
            [
                'id' => 4,
                'title' => 'South African rand',
                'symbol_left' => 'R',
                'symbol_right' => '',
                'code' => 'ZAR',
                'decimal_place' => 2,
                'value' => 0.00,
                'decimal_point' => '.',
                'thousand_point' => ',',
                'status' => 1,
                'created_at' => '2015-07-22 23:25:30',
                'updated_at' => '2015-07-22 23:25:30',
            ]
        ];

        collect($currencies)->map(function($currency) {
            factory(Currency::class)->create($currency);
        });
    }
}
