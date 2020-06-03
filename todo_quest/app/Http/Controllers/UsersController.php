<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $items = User::with('level')->paginate(9);
        $param = [
            'items' => $items,
            'input' => '',
        ];
        return view('user.index', $param);
    }

    public function search(Request $request)
    {
        $input = $request->input;
        if ($input != '') {
            $items = User::with('level')->where('name', 'like', '%'.$input.'%')->paginate(9);
        } else {
            $items = User::with('level')->paginate(9);
        }
        $param = [
            'items' => $items,
            'input' => $input,
        ];
        return view('user.search', $param);
    }
}
