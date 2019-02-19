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
                ['categoryName' => 'Boeken',
                 'categoryDescription' => 'Books and e-books',
                ],

                ['categoryName' => 'Games',
                'categoryDescription' => 'PC, Playstation, Xbox',
                ],

                ['categoryName' => 'Drank',
                'categoryDescription' => 'Alcohol and alcohol free',
                ]

            ]);
        //------------------------------------------------------------------------



    }
}
