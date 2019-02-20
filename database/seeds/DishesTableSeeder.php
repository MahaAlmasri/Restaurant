<?php

use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //------------------------------------------------------------------------
        DB::table('dishes')->insert(
            [
                ['name' => 'Kofta Meshwi',
                 'category' => 1,
                 'description' => '',
                 'price' => 8,
                 'image' => '',
                ],


                ['name' => 'Shorbet Ades',
                 'category' => 2,
                 'description' => '',
                 'price' => 1.50,
                 'image' => '',
                ],

                ['name' => 'Taboula',
                 'category' => 3,
                 'description' => '',
                 'price' => 2.50,
                 'image' => '',
                ]

            ]);
        //------------------------------------------------------------------------



    }
}


