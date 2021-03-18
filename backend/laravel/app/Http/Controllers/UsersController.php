<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

use Carbon\Carbon;

class UsersController extends Controller
{
    public function today()
    {
        $user = \Auth::user();
        $today = Carbon::today();
        // 本日実施したプランを取得
        $plans = $user->plans()->where('date', $today)->get();
        $subjects = Subject::orderBy('id')->get();
        return view('plan.today', compact('user', 'today', 'plans', 'subjects'));
    }

    public function addplan(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);
        $user = \Auth::user();
        $date = Carbon::today();
        $subject_id = $request->subject_id;
        $content = $request->content;
        $user->plans()->create(compact('date', 'subject_id', 'content'));
        return redirect()->route('plan.today');
    }

    public function month()
    {
        $user = \Auth::user();

        return view('plan.month', [
            'user' => $user,
        ]);
    }
}
