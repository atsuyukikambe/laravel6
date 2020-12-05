<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function hello()
    {
        $user = \Auth::user();

        return view ('hello', [
            'user' => $user,
        ]);
    }
}
