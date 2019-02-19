<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //--------------------------------------------------------------------
        $categories = Category::all();
        return view('categories.index', compact('categories'));
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
        return view('categories.create');
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
        //----------------------------------------------------------------
        $request->validate([
            'categoryName'=>'required',
            'categoryDescription'=> 'required'
             ]);

          $share = new Category([
            'categoryName' => $request->get('categoryName'),
            'categoryDescription'=> $request->get('categoryDescription')
          ]);
          $share->save();
          return redirect('/categories')->with('success', 'Category has been added');
        //----------------------------------------------------------------
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        //
        //--------------------------------------------------------------------
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
        //--------------------------------------------------------------------




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)

    {
    //------------------------------------------------------------------------------------------------
    $request->validate([
    'categoryName'=>'required',
    'categoryDescription'=> 'required'
          ]);

    $category = Category::find($id);
    $category->categoryName = $request->get('categoryName');
    $category->categoryDescription = $request->get('categoryDescription');
    $category->save();

    return redirect('/categories')->with('success', 'Category has been updated');

    //------------------------------------------------------------------------------------------------
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */


     public function destroy($id)
    {
        //------------------------------------------------------------------------------------------------
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('success', 'Category has been deleted Successfully');
        //------------------------------------------------------------------------------------------------
    }
}
