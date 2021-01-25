<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function showAllData()
    {
        return view('fetchedData')->with('toDoArr', todolist::all());
    }

    public function delete(Request $request, $id)
    {
        $todolist = todolist::find($id);
        $todolist->delete();
        return redirect('/');
    }

    public function create()
    {
        return view('addView');
    }

    public function addTodo(Request $request)
    {
        $todolist = new todolist;
        $todolist->todolist = $request->input('todolist');
        $todolist->save();
        return redirect('/');
    }

    public function edit($id)
    {
        return view('editTodo')->with('toDoArr', todolist::find($id));
    }

    public function editTodo(Request $request, $id)
    {
        $todolist = todolist::find($id);
        $todolist->todolist = $request->input('todolist');
        $todolist->save();
        return redirect('/');
    }

     public function APIshow()
    {
        $todolist = todolist::all();
        return response()->json($todolist);
    }

    public function APIdelete(Request $request, $id)
    {
        $todolist = todolist::find($id);
        $todolist->delete();
        return response()->json($todolist);
    }

    public function APIcreate(Request $request)
    {
        $todolist = new todolist();

        $todolist->todolist = $request->input('todolist');

        $todolist->save();
        return response()->json($todolist);
    }

    public function APIupdate(Request $request, $id)
    {
        $todolist = todolist::find($id);
        $todolist->todolist = $request->input('todolist');

        $todolist->save(); 
        return response()->json($todolist);
    }
}
