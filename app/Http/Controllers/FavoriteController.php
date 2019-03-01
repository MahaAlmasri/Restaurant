<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;
use Auth;
use App\Dish;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorites = Favorite::where('user_id', Auth::user()->id)
                        ->get();

       /*  foreach($favorites as $favorite)
        {
            $dish = Dish::find($favorite->dish_id);

            $dishes.Add($dish);

        } */
        return view('favorites.index', compact('favorites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Dish $dish)
    {dd('jj');
        $request->validate([
            'user_id'=>'required',
            'dish_id'=> 'required'
             ]);

          $share = new Favorite([
            'user_id'=>Auth::user()->id,
            'dish_id' => $request->get('dish_id')

          ]);
          $share->save();
          return redirect('/home')->with('success', 'your meal has been added to your favorite list');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        $favorite = Favorite::find($id);

        return view('favorites.edit', compact('favorite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favorite = Favorite::find($id);
        $favorite->delete();
        return redirect('/favorites')->with('success', 'Favorite has been deleted Successfully');
    }
}
