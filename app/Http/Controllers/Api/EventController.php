<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Event::orderby('data_in', 'DESC')->paginate(20);
        return EventResource::collection($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Event::findOrFail($id);
        return new EventResource($result);
    }

    /**
     * Display the last 3 resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recent()
    {
        $result = Event::orderby('data_in', 'DESC')->take(3)->get();
        return EventResource::collection($result);
    }


}
