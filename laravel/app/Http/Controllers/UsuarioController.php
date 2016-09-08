<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
//use Session; //También puedo usar estos dos en vez de las líneas 7 y 8
//use Redirect;
use Cinema\User;

use Cinema\Http\Requests;

class UsuarioController extends Controller
{
    /**
    * Display a Listing of the resource.
    *
    * @return Response
    */
    public function index(){
        $users = User::All();
        return view('usuario.index', compact('users'));    	
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(){
    	//
    	return view('usuario.create');
    }

    /**
    * Show a newly resource in storage.
    *
    * @return Response
    */
    public function store(Request $request){
            User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']), //según con la función que hicimos en el modelo, ya el bcrypt no es necesario.
        ]);

        return redirect('usuario')->with('message','store');
    }

    /**
    * Display the specified resource.
    *
    * @return Response
    */
    public function show($id){
    	//
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function edit($id){
        $user = User::find($id);
        return view('usuario.edit',['user' => $user]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param int $id
    * @return Response
    */
    public function update($id, Request $request){
    	$user = User::find($id);
        $user->fill($request->all()); //Va a los fillable del modelo
        $user->save();
        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }

    /**
    * Remove the specified resource in storage.
    *
    * @param int $id
    * @return Response
    */
    public function destroy($id){
    	
    }
}
