<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index(){
        return UserResource::collection(User::SELECT('users.id', 'users.name', 'users.email', 'roles.name AS role', 'offices.office_name')
                                            ->JOIN('role_offices', 'users.role_office_id', '=', 'role_offices.id')
                                            ->JOIN('roles', 'role_offices.role_id', '=', 'roles.id')
                                            ->JOIN('offices', 'role_offices.office_id', '=', 'offices.id')
                                            ->GET());
    }
    public function show(){
        return 1;
    }
    public function store(){
        return 1;
    }
}
