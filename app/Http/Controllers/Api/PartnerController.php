<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Partner $partner)
    {
        $rs = $partner->orderby('id', 'ASC')->get();
        return PartnerResource::collection($rs);
    }

}
