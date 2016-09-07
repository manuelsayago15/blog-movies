<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class UsuarioController extends Controller
{
    /**
    * Display a Listing of the resource.
    *
    * @return Response
    */
    public function index(){
    	
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
    public function store(){
    	//
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
    	//
    }

   	/**
    * Update the specified resource in storage.
    *
    * @param int $id
    * @return Response
    */
    public function update($id){
    	//
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
