<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;

class UsersController extends Controller
{
    public function index()
    {
        $items = Level::with('user')->paginate(9);
        $param = ['items' => $items];
        return view('user.index', $param);
    }

    public function search(Request $request)
    {
        
    }
}
