<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class MovieController extends Controller{
    /**
    * Display a Listing of the resource.
    *
    * @return Response
    */
    public function index(){
    	return "Estoy en el index";
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(){
    	//
    	return "Esto sería el formulario para crear";
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
