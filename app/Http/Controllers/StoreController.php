<?php

namespace App\Http\Controllers;
use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'number'=>'required',
            'address'=> 'required'
             ]);

          $store = new Store([
            'name' => $request->get('name'),
            'number' => $request->get('number'),
            'address'=> $request->get('address')
          ]);
          $store->save();
          return redirect('/stores')->with('success', 'Store has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);

        return view('stores.edit', compact('store'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $request->validate([
                'name'=>'required',
                'number'=>'required',
                'address'=> 'required'
                 ]);

                 $store = Store::find($id);
                 $store->name = $request->get('name');
                 $store->number = $request->get('number');
                 $store->address = $request->get('address');
                 $store->save();

                 return redirect('/stores')->with('success', 'Store has been added');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect('/stores')->with('success', 'Store has been deleted Successfully');

    }
}
