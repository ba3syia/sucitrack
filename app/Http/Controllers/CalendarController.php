<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar.index');
    }

    public function events()
    {
        $records = auth()->user()
            ->menstrualRecords()
            ->get();

        $events = [];

        foreach ($records as $record) {
            $events[] = [
                'title' => 'Period',
                'start' => $record->start_date,
                'end' => $record->end_date,
                'color' => '#f472b6'
            ];
        }

        return response()->json($events);
    }
}