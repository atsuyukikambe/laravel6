<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function today()
    {
        $user = \Auth::user();

        return view('plan.today', [
            'user' => $user,
        ]);
    }
}
