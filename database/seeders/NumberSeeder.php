<?php

namespace Database\Seeders;

use App\Models\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Number::insert(
            [
                [
                    'gateway_id'=>1,
                    'user_id'=>1,
                    'number'=>'01837664478'
                ],
                [
                    'gateway_id'=>1,
                    'user_id'=>1,
                    'number'=>'01403251501'
                ]
            ]
        );
    }
}
