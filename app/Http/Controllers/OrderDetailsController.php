<?php


namespace App\Http\Controllers;
use App\Dish;
use App\orderDetails;
use App\Order;
use Illuminate\Http\Request;
use Session;
use Auth;

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

            if (Session::get('order')==null)
             $order = new Order([
                'user_id' => Auth::user()->id
             ]);
            else {
                $order = Session::get('order');
            }
             $order->save();
             Session::put('order', $order);
          $orderDetail = new orderDetails([
              'order_id'=> $order->id,
            'dish_id' => $request->get('dish_id'),
            'amount'=> $request->get('amount'),

            'price' => $request->get('price')
          ]);
          $orderDetail->save();
          return redirect('/home')->with('success', 'order has been added');
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
