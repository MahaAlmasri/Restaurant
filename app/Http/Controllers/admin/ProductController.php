<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       //--------------------------------------------------------------------
       $products = Product::all();
       return view('products.index', compact('products'));
       //--------------------------------------------------------------------

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //--------------------------------------------------------------------
        return view('products.create');
        //--------------------------------------------------------------------

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //----------------------------------------------------------------
        $request->validate([
            'productName'=>'required',
            'productPrice'=> 'required'
             ]);

          $share = new Product([
            'productName' => $request->get('productName'),
            'productCategory' => $request->get('productCategory'),
            'productDescription' => $request->get('productDescription'),
            'productPrice' => $request->get('productPrice'),
            'productImage' => $request->get('productImage')

          ]);
          $share->save();
          return redirect('/products')->with('success', 'Product has been added');
        //----------------------------------------------------------------



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //--------------------------------------------------------------------
        $product = Product::find($id);

        return view('products.edit', compact('product'));
        //--------------------------------------------------------------------

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */


//    public function update(Request $request, Product $product)
    public function update(Request $request, $id)

    {
    //------------------------------------------------------------------------------------------------
    $request->validate([
        //'productName'=>'required',
        'productPrice'=> 'required'
              ]);

        $product = Product::find($id);
        $product->productName = $request->get('productName');
        $product->productCategory = $request->get('productCategory');
        $product->productDescription = $request->get('productDescription');
        $product->productPrice = $request->get('productPrice');
        $product->productImage = $request->get('productImage');

        $product->save();

        return redirect('/products')->with('success', 'Product has been updated');
     //------------------------------------------------------------------------------------------------




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //------------------------------------------------------------------------------------------------
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Product has been deleted Successfully');
        //------------------------------------------------------------------------------------------------



    }
}
