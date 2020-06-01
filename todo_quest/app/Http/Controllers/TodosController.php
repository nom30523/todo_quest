<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Todo;
use App\Thresold;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function index() {
        return 'Hello World';
    }

    public function show() {
        $user = Auth::user();
        $level = $user->level->level;
        if ($level < 7) {
            $thresold = Thresold::where('level', $level + 1)->first();
        } else {
            $thresold = 0;
        }
        $param = [
            'user' => $user,
            'thresold' => $thresold,
        ];
        return view('todo.show', $param);
    }

    public function store(Request $request, User $user)
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo(['body' => $request->body]);
        $form = $request->all();
        unset($form['_token']);
        $user->todos()->save($todo);
        return redirect('/todos/show');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit')->with('todo', $todo);
    }

    public function update(Request $request, Todo $todo)
    {
        $this->validate($request, Todo::$rules);
        $todo->body = $request->body;
        $todo->save();
        return redirect('/todos/show');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos/show');
    }

    public function status(Todo $todo)
    {
        if ($todo->status == 0) {
            $todo->status = 1;
        } else {
            $todo->status = 0;
        }
        $todo->save();
        return redirect('/todos/show');
    }
}
