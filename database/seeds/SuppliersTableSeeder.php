<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert(
            [
                ['supplierName' => 'We Are BV',
                'supplierAddress' => 'Bergstraat',
                'supplierHousenumber' => 10,
                'supplierPostalcode' => '1763AX',
                'supplierCity' => 'The Hague',
                'supplierCountry' => 'The Netherlands',
                'supplierPhone' => 31235292195,
                'supplierEmail' => str_random(10).'@gmail.com',
            ],

                ['supplierName' => 'COMP Srl',
                'supplierAddress' => str_random(4),
                'supplierHousenumber' => 12,
                'supplierPostalcode' => '43277',
                'supplierCity' => 'Naples',
                'supplierCountry' => 'Italy',
                'supplierPhone' => 39346529855,
                'supplierEmail' => 'cafe@gmail.it',
                ]

            ]);
    }
}
