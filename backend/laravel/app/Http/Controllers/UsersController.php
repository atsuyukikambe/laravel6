<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Carbon\Carbon;

class UsersController extends Controller
{
    public function today()
    {
        $user = \Auth::user();

        $today = Carbon::now();

        return view('plan.today', [
            'user' => $user,
            'today' => $today,
        ]);
    }

    public function addplan(Request $request)
    {
        $user = \Auth::user();

        $today = Carbon::now();

        $request->validate([
            'content' => 'required',
        ]);

        $request->user()->plans()->create([
            'content' => $request->content,
        ]);

        $content = $request->input('content');

        return view('plan.today', [
            'content' => $content,
            'user' => $user,
            'today' => $today,
        ]);
    }

    public function month()
    {
        $user = \Auth::user();

        return view('plan.month', [
            'user' => $user,
        ]);
    }
}
