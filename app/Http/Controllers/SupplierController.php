<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
            return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
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
        'supplierName' => 'required',
        'supplierAddress' => 'required',
        'supplierHousenumber' => 'required|integer',
        'supplierPostalcode' => 'required',
        'supplierCity' => 'required',
        'supplierCountry' => 'required',
        'supplierPhone' => 'required',
        'supplierEmail' => 'required'
        ]);
        $supplier = new Supplier([
            'supplierName' => $request->get('supplierName'),
            'supplierAddress'=> $request->get('supplierAddress'),
            'supplierHousenumber'=> $request->get('supplierHousenumber'),
            'supplierPostalcode'=> $request->get('supplierPostalcode'),
            'supplierCity'=> $request->get('supplierCity'),
            'supplierCountry'=> $request->get('supplierCountry'),
            'supplierPhone'=> $request->get('supplierPhone'),
            'supplierEmail'=> $request->get('supplierEmail')
          ]);
          $supplier->save();
          return redirect('/suppliers')->with('success', 'Supplier has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'supplierName' => 'required',
            'supplierAddress' => 'required',
            'supplierHousenumber' => 'required|integer',
            'supplierPostalcode' => 'required',
            'supplierCity' => 'required',
            'supplierCountry' => 'required',
            'supplierPhone' => 'required',
            'supplierEmail' => 'required'
            ]);

            // $supplier = Supplier::find($id);
            $supplier->supplierName = $request->get('supplierName');
            $supplier->supplierAddress = $request->get('supplierAddress');
            $supplier->supplierHousenumber = $request->get('supplierHousenumber');
            $supplier->supplierPostalcode = $request->get('supplierPostalcode');
            $supplier->supplierCity = $request->get('supplierCity');
            $supplier->supplierCountry = $request->get('supplierCountry');
            $supplier->supplierPhone = $request->get('supplierPhone');
            $supplier->supplierEmail = $request->get('supplierEmail');
            $supplier->save();
    
            return redirect('/suppliers')->with('success', 'Updated Supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
   
        return redirect('/suppliers')->with('success', 'Supplier Deleted');
    }
}
