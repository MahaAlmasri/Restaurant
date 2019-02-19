<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
        DB::table('products')->insert(
            [
                ['productName' => 'Donald Duck Album 1',
                 'productCategory' => 1,
                 'productDescription' => 'Donald Duckieeeeeeeee',
                 'productPrice' => 2.50,
                 'productImage' => 'href',
                ],

                ['productName' => 'Playstation 4',
                 'productCategory' => 2,
                 'productDescription' => 'Game Console',
                 'productPrice' => 395.00,
                 'productImage' => 'href',
                ],

                ['productName' => 'Black Label 1 liter',
                 'productCategory' => 3,
                 'productDescription' => 'Wishkey 40%',
                 'productPrice' => 50.00,
                 'productImage' => 'href',
                ]

            ]);
        //------------------------------------------------------------------------



    }
}


/*
$table->string('productName');
$table->integer('productCategory');
$table->string('productDescription');
$table->float('productPrice');
$table->string('productImage');
 */
