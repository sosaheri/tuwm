<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();;
        return view('user/users')->with(['users' => $users]);
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
              
        $user = User::where('id', $id)->first();

        return view('user/show')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::where('id', $request->id)->first();

        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->save();

        $users = User::all();

        return view('user/users')->with(['users' => $users])->with('message', 'Cliente Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id );
        $user->delete();

        $users = User::all();

        return view('user/users')->with(['users' => $users])->with('message', 'Cliente Eliminado');
    }

}
