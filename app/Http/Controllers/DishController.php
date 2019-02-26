<?php

namespace App\Http\Controllers;
use App\Category;
use App\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
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
       $dishes = dish::all();
       return view('dishes.index', compact('dishes'));
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
        $categories = Category::all();
        return view('dishes.create', compact('categories'));
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
            'name'=>'required',
            'price'=> 'required'
             ]);

          $share = new dish([
            'name' => $request->get('name'),
            'category_id' => $request->get('category_id'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'image' => $request->get('image')

          ]);
          $share->save();
          return redirect('/dishes')->with('success', 'dish has been added');
        //----------------------------------------------------------------



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //--------------------------------------------------------------------
        $categories = Category::all();
        $dish = Dish::find($id);

        return view('dishes.edit', compact('dish'), compact ('categories'));
        //--------------------------------------------------------------------

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */


//    public function update(Request $request, dish $dish)
    public function update(Request $request, $id)

    {
    //------------------------------------------------------------------------------------------------
    $request->validate([
        'name'=>'required',
        'price'=> 'required'
              ]);

        $dish = dish::find($id);
        $dish->name = $request->get('name');
        $dish->category_id = $request->get('category_id');
        $dish->description = $request->get('description');
        $dish->price = $request->get('price');
        $dish->image = $request->get('image');

        $dish->save();

        return redirect('/dishes')->with('success', 'dish has been updated');
     //------------------------------------------------------------------------------------------------




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //------------------------------------------------------------------------------------------------
        $dish = Dish::find($id);
        $dish->delete();
        return redirect('/dishes')->with('success', 'dish has been deleted Successfully');
        //------------------------------------------------------------------------------------------------



    }
}
