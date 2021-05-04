<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index(){
        return Office::all();
    }
    public function show(){

    }
}
