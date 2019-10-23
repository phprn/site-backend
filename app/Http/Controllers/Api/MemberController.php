<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MemberResource;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Member::orderby('nome', 'ASC')->get();
        return MemberResource::collection($result);
    }

    /**
     * Display the last 24 resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $result = Member::orderby('id', 'ASC')->take(24)->get();
        return MemberResource::collection($result);
    }



}
