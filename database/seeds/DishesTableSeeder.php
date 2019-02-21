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
                 'category_id' => 1,
                 'description' => '',
                 'price' => 8,
                 'image' => 'http://lebaneatexpress.co.uk/wp-content/uploads/2016/09/kofta-meshwi.jpg',
                ],


                ['name' => 'Shorbet Ades',
                 'category_id' => 2,
                 'description' => '',
                 'price' => 1.50,
                 'image' => 'http://www.kitchenofpalestine.com/wp-content/uploads/2013/07/Lentil-final-3-700x474.jpg',
                ],

                ['name' => 'Taboula',
                 'category_id' => 3,
                 'description' => '',
                 'price' => 2.50,
                 'image' => 'https://i.ytimg.com/vi/Bn-tZTTUs6k/hqdefault.jpg',
                ]

            ]);
        //------------------------------------------------------------------------



    }
}


