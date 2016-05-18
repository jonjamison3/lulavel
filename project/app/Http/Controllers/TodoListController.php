<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TodoListController extends Controller
{
    //
    public function index(){
        return view('todos.index');
    }
    public function create(){

    }
    public function store(){

    }
    public function show($id){
      return view('todos.show')->with('id' , $id);  
    }
    public function edit($id){

    }
    public function update($id){

    }
}
