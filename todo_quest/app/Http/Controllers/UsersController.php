<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;

class UsersController extends Controller
{
    public function index()
    {
        $items = Level::with('user')->get();
        $param = ['items' => $items];
        return view('user.index', $param);
    }
}
