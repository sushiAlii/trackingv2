<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\PPMPResource;

use App\Models\Ppmp;

class PPMPController extends Controller
{
    public function index(Request $request){

        return PPMPResource::collection(Ppmp::SELECT('ppmps.id', 'ppmps.title', 'ppmps.account_code', 'ppmps.type', 'offices.office_name','ppmps.status', 'ppmps.created_at','ppmps.total')
                    ->JOIN('users','ppmps.user_id','=','users.id')
                    ->JOIN('role_offices','users.role_office_id','=','role_offices.id')
                    ->JOIN('offices','role_offices.office_id','=','offices.id')
                    ->GET());
    }
}
