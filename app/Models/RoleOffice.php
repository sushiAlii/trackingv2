<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleOffice extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function role(){
     
        return $this->belongsTo('App\Role');
    }

    public function office(){

        return $this->belongsTo('App\Office');
    }

    public function user(){

        return $this->hasMany('App\User');
    }
}
