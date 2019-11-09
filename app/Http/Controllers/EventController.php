<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('pages.events');
    }


    // Save Event
    public function save_event(Request $request)
    {
        $insert = DB::table('events')->insert([
            "name"          => $request->name,
            "address"       => $request->address,
            "date"          => $request->date,
            "event_type"    => $request->event_type,
            "ticket"        => $request->ticket,
            "venue_name"    => $request->venue_name,
        ]);

        if ($insert) {
            echo json_encode('success');
        } else {
            echo json_encode('failed');
        }
    }

    // Update Event
    public function update_event(Request $request)
    {
        $update = DB::table('events')->where('id', $request->event_updating_id)->update([
            "name"  => $request->name,
            "address"       => $request->address,
            "date"          => $request->date,
            "event_type"    => $request->event_type,
            "ticket"        => $request->ticket,
            "venue_name"    => $request->venue_name,
        ]);
        if ($update) {
            echo json_encode('updated');
        } else {
            echo json_encode('failed');
        }
    }

    // Update Event List
    public function eventFetchList()
    {
        echo json_encode(DB::table('events')->get());
    }


    // Fetch Department on id
    public function GetEvent($id)
    {
        echo json_encode(DB::table('events')->where('id', $id)->first());
    }


    public function GetEventDetail($id)
    {

        $data = json_encode(DB::table('events')->where('id', $id)->first());
        return view('pages.events_detail')->with('data', $data);
    }
}
