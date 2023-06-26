<?php

namespace Database\Seeders;

use App\Models\Gateway;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gateway::insert([
            [
                'name'=>'Twilio',
                'api_key'=>'apidkdkdd',
                'api_secret'=>'hshdfahsdf'
            ],
            [
                'name'=>'Plivo',
                'api_key'=>'ddsdfsdfsdffd',
                'api_secret'=>'hshdfaddhsdf'
            ]
        ]);
    }
}
