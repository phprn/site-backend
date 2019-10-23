<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\InformationResource;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Information::where('active', true)->orderby('id', 'DESC')->paginate(20);
        return InformationResource::collection($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        return new InformationResource($information);
    }

    /**
     * Display the last 2 resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recent()
    {
        $result = Information::orderby('id', 'DESC')->take(2)->get();
        return InformationResource::collection($result);
    }
}
