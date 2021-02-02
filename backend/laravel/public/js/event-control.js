function addEvent(calendar, info) {
    //addEvent()を使うためにfullcalendar.jsで定義したcalendarを引数で受け取る

    var title = "サンプルイベント";

    $.ajax({
        url: '/ajax/addEvent',
        type: 'POST',
        dataTape: 'json',
        data: {
            "title": title,
            "date": info.dateStr,
        }
    }).done(function (result) {
        calendar.addEvent({
            id: result['event_id'],
            //phpから受け取ったevent_idをeventObjectのidにセット
            title: title,
            start: info, dateStr,
        });
        //ajaxに成功したらフロント側にeventを追加
    });
}

function editEventDate(info) {
    var event_id = info.event.id;
    var date = formatDate(info.event.start);

    $.ajax({
        url: '/ajax/editEventADate',
        type: 'POST',
        data: {
            "id": event_id,
            "newDate": date
            //ドロップした後の日付をphp側に渡す
        }
    })
}

function formatDate(date) {
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var newDate = year + '-' + month + '-' + day;
    return newDate;
}
//info.event.startの日付を"2021-01-01"のように整形する関数