<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        DB::table('categories')->insert(
            [
                ['categoryName' => 'Meat dishes',
                 'categoryDescription' => 'halal meat dishes',
                ],

                ['categoryName' => 'soups',
                'categoryDescription' => 'differant types',
                ],

                ['categoryName' => 'salads',
                'categoryDescription' => 'Starters & salads dishes',
                ]

            ]);
        //------------------------------------------------------------------------



    }
}
