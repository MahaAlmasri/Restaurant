<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {

        $user= User::find($id);

        return view('auth.edit', compact('user'));

    }

    public function update(Request $request, $id )
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);
        $user= User::find($id);
        $user->name = $request->get('name');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        $user->save();
        return redirect('/home')->with('success','your profile is changed');

    }
}
