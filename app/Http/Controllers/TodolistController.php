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

    public function APIshow()
    {
        $todolist = todolist::all();
        return response()->json($todolist);
    }

    public function delete(Request $request, $id)
    {
        $todolist = todolist::find($id);
        $todolist->delete();
        return redirect('/');
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
}
