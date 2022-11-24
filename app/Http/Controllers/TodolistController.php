<?php

namespace App\Http\Controllers;

use App\Models\TodoListM;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $todos= TodoListM::get();
        return view('BootstrapTodolist.index')->with('todos',$todos);

        $update= TodoListM::all();
        return view('TodoList',['data'=>$update]);
    }

public function store(Request $request)
{

    TodoListM::create([
        'baslik'=>$request->text
    ]);
    return back();

}


public function login()
{
    return view('BootstrapTodolist.login');
}

public function destroy($id)
    {
        TodoListM::destroy($id);
        return redirect('index')->with(' deleted!');
    }



public function update(Request $request, $id)
    {

        $todos=TodoListM::find($id);
        $input=$request->all();
        $todos->update($input);
        return redirect('index')->with('index update!');
    }


    public function edit($id)
    {

        $todos=TodoListM::find($id);
        return view('BootstrapTodolist.edit')->with('todo',$todos);
    }








}






