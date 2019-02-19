<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('payments.create');
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
        $request->validate([
            'productName'=>'required',
            'productPrice'=> 'required'
             ]);

          $share = new Payment([
            'productName' => $request->get('productName'),
            /* 'productCategory' => $request->get('productCategory'),
            'productDescription' => $request->get('productDescription'),
            'productPrice' => $request->get('productPrice'),
            'productImage' => $request->get('productImage') */

          ]);
          $share->save();
          return redirect('/products')->with('success', 'Product has been added');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
        $payment = Payment::find($id);

        return view('payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
        $request->validate([
            //'productName'=>'required',
            'productPrice'=> 'required'
                  ]);

            $payment = Payment::find($id);
           /*  $product->productName = $request->get('productName');
            $product->productCategory = $request->get('productCategory');
            $product->productDescription = $request->get('productDescription');
            $product->productPrice = $request->get('productPrice');
            $product->productImage = $request->get('productImage'); */

            $product->save();

            return redirect('/payments')->with('success', 'Product has been updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
        $payment = Payment::find($id);
        $payment->delete();
        return redirect('/payments')->with('success', 'Product has been deleted Successfully');
    }
}
