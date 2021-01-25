<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function showAllData()
    {
        return view('fetchedData')->with('toDoArr', todolistModel::all());
    }

    public function APIshow()
    {
        $todolist = todolistModel::all();
        return response()->json($todolist);
    }
}
