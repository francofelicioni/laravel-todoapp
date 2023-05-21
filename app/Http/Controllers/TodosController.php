<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * index > to show all todos
     * store > to save a todo
     * update > to update a todo
     * destroy > to delete a a todo
     * edit > to show edition form
     **/

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | min:3'
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success', 'Task successfully created');
    }
}
