<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Todo;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function index() {
        return 'Hello World';
    }

    public function show() {
        $user = Auth::user();
        $param = ['user' => $user];
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
}
