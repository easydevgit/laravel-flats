<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flats = [
            [
                'name'     => 'The Victoria',
                'price'    => 374662.00,
                'bedroom'  => 4,
                'bathroom' => 2,
                'storey'   => 2,
                'garage'   => 2,
            ],
            [
                'name'     => 'The Xavier',
                'price'    => 513268.00,
                'bedroom'  => 4,
                'bathroom' => 2,
                'storey'   => 1,
                'garage'   => 2,
            ],
            [
                'name'     => 'The Como',
                'price'    => 454990.00,
                'bedroom'  => 4,
                'bathroom' => 3,
                'storey'   => 2,
                'garage'   => 3,
            ],
            [
                'name'     => 'The Aspen',
                'price'    => 384356.00,
                'bedroom'  => 4,
                'bathroom' => 2,
                'storey'   => 2,
                'garage'   => 2,
            ],
            [
                'name'     => 'The Lucretia',
                'price'    => 572002.00,
                'bedroom'  => 4,
                'bathroom' => 3,
                'storey'   => 2,
                'garage'   => 2,
            ],
            [
                'name'     => 'The Toorak',
                'price'    => 521951.00,
                'bedroom'  => 5,
                'bathroom' => 2,
                'storey'   => 1,
                'garage'   => 2,
            ],
            [
                'name'     => 'The Skyscape',
                'price'    => 263604.00,
                'bedroom'  => 3,
                'bathroom' => 2,
                'storey'   => 2,
                'garage'   => 2,
            ],
            [
                'name'     => 'The Clifton',
                'price'    => 386103.00,
                'bedroom'  => 3,
                'bathroom' => 2,
                'storey'   => 1,
                'garage'   => 1,
            ],
            [
                'name'     => 'The Geneva',
                'price'    => 390600.00,
                'bedroom'  => 4,
                'bathroom' => 3,
                'storey'   => 2,
                'garage'   => 2,
            ],
        ];

        DB::table('flats')->insert($flats);
    }
}
