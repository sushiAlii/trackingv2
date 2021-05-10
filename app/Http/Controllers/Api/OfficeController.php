<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\OfficeGraphResource;
use App\Models\Office;
use DB;

class OfficeController extends Controller
{
    public function index(){
        return Office::all();
    }
    public function office_graphs(){

        return $office = DB::SELECT(DB::RAW(
            "SELECT
                offices.office_name, 
                (
                    SELECT
                        COUNT(ppmps.cur_location)
                    FROM
                        ppmps
                    WHERE
                        offices.office_name = ppmps.cur_location
                )
            FROM
                offices
            INNER JOIN
                role_offices ON offices.id = role_offices.office_id
            INNER JOIN	
                roles ON role_offices.role_id = roles.id
            WHERE
                roles.name = 'PSD' OR roles.name = 'Anchor'
            ORDER BY offices.office_name"
            ));

        return $office;
    }
}
