<?php

namespace App\Http\Controllers;

use App\Models\Todolists;
use Illuminate\Http\Request;

class TodolistsController extends Controller
{
    
    public function index()
    {
        $todos = Todolists::all();
        return view('todolists', compact('todos'));
    }


   
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'content' => 'required'
        ]);

        Todolists::create($data);
        return back();
    }

    public function update(Todolists $todolist)
    {
        if($todolist->isDone == false)
        $todolist->update(['isDone' => true]);

        else
        $todolist->update(['isDone' => false]);
        
        return back();
    }
   
    public function destroy(Todolists $todolist)
    {
        $todolist->delete();
        return back();
    }

    
}
