<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PpmpTravelLogResource;
use App\Http\Resources\DocumentDetailResource;
use App\Models\Ppmp;
use App\Models\OrderDetail;
use App\Models\PpmpTravelLog;

class DocumentDetailController extends Controller
{
    public function index(){
        
        return DocumentDetailResource::collection(OrderDetail::select('order_details.id','order_details.ppmp_id','order_details.product_id','products.name','order_details.quantity','products.price','order_details.total')
                            ->join('products', 'order_details.product_id','=','products.id')
                            ->where('order_details.ppmp_id',1)
                            ->get());
    }

    public function showPPMPDetails($id){

        return DocumentDetailResource::collection(OrderDetail::SELECT('order_details.id','order_details.ppmp_id','order_details.product_id','products.name','order_details.quantity','products.price','order_details.total')
                            ->JOIN('products','order_details.product_id','=','products.id')
                            ->WHERE('order_details.ppmp_id', $id)->GET());
    }

    public function showPPMPTravels($id){
        return PpmpTravelLogResource::collection(PpmpTravelLog::select('ppmp_travel_logs.id','ppmp_travel_logs.ppmp_id','ppmp_travel_logs.date_arrived','ppmp_travel_logs.office')
                                ->where('ppmp_travel_logs.ppmp_id',$id)->orderByDesc('ppmp_travel_logs.date_arrived')->get());
    }
}
