<?php

namespace App\Http\Controllers;
use App\Dish;
use App\orderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Dish $dish)
    {

        return view('orderDetails.create', $dish);
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
      /*   $request->validate([
            'name'=>'required',
            'price'=> 'required'
             ]);*/
             dd('123');
             if (Session::get('order')!=null)
             $order = new Order([
                'user_id' => Auth::user()->id
             ]);
             $order->save();
             Session::put('order', $order);
          $orderDetail = new orderDetails([
            'dish_id' => $request->get('dish'),
            'amount'=> $request->get('amount'),
             'order_id'=> $order->id,
            'price' => $request->get('price')
          ]);
          $orderDetail->save();
          return redirect('/dishes')->with('success', 'order has been added');
        //----------------------------------------------------------------



    }


    /**
     * Display the specified resource.
     *
     * @param  \App\orderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function show(orderDetails $orderDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\orderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(orderDetails $orderDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\orderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderDetails $orderDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\orderDetails  $orderDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderDetails $orderDetails)
    {
        //
    }
}
