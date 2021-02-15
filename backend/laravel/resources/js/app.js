import { Calendar } from '@fullcalendar/core';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        const calendar = new Calendar(calendarEl, {

            plugins: [timeGridPlugin, interactionPlugin],

            initialView: 'timeGridDay',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'timeGridDay'
            },
            dateClick: function (info) {
                alert('Clicked on: ' + info.dateStr);
                console.log(info);
            },
            eventClick: (info) => {
                console.log(info);
            }
        })
        calendar.render()
        console.log(calendarEl, calendar)
    }
})
