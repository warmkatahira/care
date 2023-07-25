<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PooStatus;

class PooStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PooStatus::create([
            'poo_status' => '固い',
        ]);
        PooStatus::create([
            'poo_status' => '普通',
        ]);
        PooStatus::create([
            'poo_status' => '少し柔らかい',
        ]);
        PooStatus::create([
            'poo_status' => '柔らかい',
        ]);
        PooStatus::create([
            'poo_status' => '下痢',
        ]);
    }
}
