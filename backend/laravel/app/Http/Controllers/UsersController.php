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
        $page1 = $request->page1;
        $page2 = $request->page2;
        $page3 = $request->page3;
        $page4 = $request->page4;
        $page5 = $request->page5;
        $page6 = $request->page6;
        $page7 = $request->page7;
        $page8 = $request->page8;
        $start_hour = $request->start_hour;
        $start_minute = $request->start_minute;
        $end_hour = $request->end_hour;
        $end_minute = $request->end_minute;
        $startLineHour = ($start_hour * 40 + $start_minute * 0.66666667) = $request->startLineHour;
        $user->plans()->create(compact('date', 'subject_id', 'content', 'page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8', 'startLineHour'));
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
