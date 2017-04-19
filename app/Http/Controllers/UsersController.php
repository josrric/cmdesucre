<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Caffeinated\Flash\Facades\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $u = User::orderBy('id', 'ASC')->paginate(5);
        
        return view('admin.user.index')->with('user', $u);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password=bcrypt($request->password);
        $user->remember_token=$request->_token;
        $user->save();

        Flash::success('Se ha registrado '.$user->name.' exitosamente');

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $u = User::find($id);

        return view('admin.user.update')->with('user', $u);
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
        $u = User::find($id);
        $u->name=$request->name;
        $u->email=$request->email;
        $u->type=$request->type;
        $u->save();

        Flash::warning('Usuario actualizado exitosamente');
        return redirect()->route('admin.users.index');

           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User::find($id);
        $u->delete();
        Flash::error('Usuario elminado');

        return redirect()->route('admin.users.index');
    }
}
