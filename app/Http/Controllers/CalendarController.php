<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::get()->sortBy('start_date');
        if($event->count() > 0){
            $event[0]->startDate;
            $event[0]->startDateTime;
            $event[0]->endDate;
            $event[0]->endDateTime;
        }
        return view('dashboard.calendar.calendar', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calendar(){
        return view('dashboard.calendar.display');
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $event = new Event;
            $event->name = $request->title;
            $event->description = $request->description;
            $event->startDateTime = Carbon::parse($request->start_date . ' ' . $request->start_date_time);
            $event->endDateTime = Carbon::parse($request->end_date . ' ' . $request->end_date_time);
            $event->save();
            return redirect()->back()->with('success', 'Event has been added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $event = Event::find($id);
            $event->name = $request->title;
            $event->description = $request->description;
            $event->startDateTime = Carbon::parse($request->start_date . ' ' . $request->start_date_time);
            $event->endDateTime = Carbon::parse($request->end_date . ' ' . $request->end_date_time);
            $event->save();
            return redirect()->back()->with('success', 'Event has been updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event has been deleted');
    }
}
