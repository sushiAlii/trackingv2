<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DocumentResource;
use App\Http\Resources\PPMPTravelLogResource;
use Illuminate\Http\Request;
use App\Models\Ppmp;
use App\Models\PpmpTravelLog;


class DocumentController extends Controller
{
    public function ppmp(){

        return DocumentResource::collection(Ppmp::all());
    }

    public function showOrder(){
        //return DocumentResource::collection(Ppmp::select('ppmps.id','ppmps.title','ppmps.account_code','ppmps.total','ppmps.type','ppmps.status','ppmps.created_at')
        //            ->where('ppmps.id',1)->get());
        //return DocumentResource::collection(Ppmp::all()->where('ppmps.id',1));
    }

    public function ppmpWithId($id){
        return DocumentResource::collection(Ppmp::SELECT('id','user_id','title','account_code','total','type','status','source_of_fund_id', 'created_at')
                                                ->WHERE('id',$id)
                                                ->GET());
    }

    public function ppmp_track(){
        return PPMPTravelLogResource::collection(PpmpTravelLog::select('ppmp_travel_logs.id','ppmp_travel_logs.ppmp_id','ppmp_travel_logs.date_arrived','ppmp_travel_logs.office')
                                ->where('ppmp_travel_logs.ppmp_id',1)->orderByDesc('ppmp_travel_logs.date_arrived')->get());
    }

}
