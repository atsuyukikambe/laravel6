document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid'],
        //プラグインを読み込み
        defaultView: 'dayGridMonth',
        //カレンダーを月ごとに表示
        editable: true,
        //イベント編集
        firstDay: 1,
        //秋の始まりを設定。1→月曜日。defaultは0(日曜日)
        eventDurationEditable: false,
        //イベントの期間変更
        selectLongPressDelay: 0,
        //スマホをタップしたとき即反応
        events: [
            {
                title: 'イベント',
                start: '2021-01-01'
            }
        ],
        //一旦イベントのサンプルを表示。動作確認用。

        eventDrop: function (info) {
            //eventをドラッグしたときの処理
            editEventDate(info);

        },

        dateClick: function (info) {
            //日付をクリックしたときの処理
            addEvent(calendar, info);

        },

    });
    calendar.render();
});