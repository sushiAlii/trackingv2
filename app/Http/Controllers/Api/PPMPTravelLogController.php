<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\PpmpTravelLog;
use App\Models\Ppmp;
use App\Models\User;

class PPMPTravelLogController extends Controller
{
    public function store(Request $request){

        $code = $request->code;
        $user_id = $request->id;

        $ppmp = Ppmp::WHERE('account_code', $code)->first();
        $user_location = User::SELECT('users.id','offices.office_name')
                                ->JOIN('role_offices','users.role_office_id','=','role_offices.id')
                                ->JOIN('offices','role_offices.office_id','=','offices.id')
                                ->WHERE('users.id',$user_id)
                                ->first();
            if($ppmp){
                $ppmp_travel_log = new PpmpTravelLog;
                $ppmp_travel_log->ppmp_id = $ppmp->id;
                $ppmp_travel_log->date_arrived = now();
                $ppmp_travel_log->office = $user_location->office_name;
                $ppmp_travel_log->save();   

                return ('Scan Successful');
            }
        return ('Scan Failed');
    }
}
