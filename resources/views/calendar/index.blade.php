<x-app-layout>
    <div class="p-4">

        <div class="bg-white/60 backdrop-blur-md p-4 rounded-2xl shadow-sm max-w-3xl mx-auto">
            <div id="calendar" class="text-sm"></div>
        </div>

    </div>

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {

        let calendarEl = document.getElementById('calendar');

        let calendar = new FullCalendar.Calendar(calendarEl, {

            initialView: 'dayGridMonth',

            height: 450, 

            aspectRatio: 1.2,

            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: ''
            },

            events: '/calendar/events'

        });

        calendar.render();
    });
    </script>

    <style>
    .fc {
        font-size: 12px;
    }

    .fc-toolbar-title {
        font-size: 16px !important;
        font-weight: 600;
    }

    .fc-button {
        background: linear-gradient(to right, #ec4899, #a855f7) !important;
        border: none !important;
        border-radius: 10px !important;
        font-size: 12px !important;
    }
    </style>
</x-app-layout>