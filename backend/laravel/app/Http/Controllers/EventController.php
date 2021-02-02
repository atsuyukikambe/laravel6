<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function setEvents(Request $request)
    {

        $start = $this->formatDate($request->all()['start']);
        $end = $this->formatDate($request->all()['end']);
        //表示した月のカレンダーの始まりの日と終わりの日をそれぞれ取得。

        $events = Event::select('id', 'title', 'date')->whereBetween('date', [$start, $end])->get();
        //カレンダー期間内イベントを取得

        $newArr = [];
        foreach ($events as $item) {
            newItem["id"] = $item["event_id"];
            newItem["title"] = $item["title"];
            newItem["start"] = $item["date"];
            $newArr[] = $newItem;
        }
        //新たな配列を用意し、EventsObjectが対応している配列にキーの名前を変更する

        echo json_encode($newArr);
        //json形式にして出力
    }

    public function formatDate($date)
    {
        return str_replace('T00:00:00+09:00', '', $date);
    }

    public function addEvent(Request $requet)
    {
        $data = $request->all();
        $event = new Event();
        $event->event_id = $this->generateId();

        $event->date = $data['date'];
        $event->title = $data['title'];
        $event->save();

        return response()->json(['event_id' => $event->event_id]);
    }
    //ajaxで受け取ったデータをデータベースに追加し、今度はidを返す

    public function editEventDate(Request $request)
    {
        $data = $request->all();
        $event = Event::find($data['id']);
        $event->date = $date($data['newDate']);
        $event->save();
        return null;
    }
    // ajaxで受け取ったデータからデータベースの日付データを変更
}
