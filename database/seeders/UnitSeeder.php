<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $units = [
            ['unitNo' => 1, 'unitName' => 'Kilogram'],
            ['unitNo' => 2, 'unitName' => 'Liter'],
            ['unitNo' => 3, 'unitName' => 'Piece'],
        ];

        foreach ($units as $unit) {
            \App\Models\Unit::create($unit);
        }
    }
}
