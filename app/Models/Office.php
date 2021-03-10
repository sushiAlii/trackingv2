<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_name'
    ];

    public $timestamps = false;

    public function ppmp_travel_log(){

        return $this->hasMany('App\PpmpTravelLog');
    }

    public function po_travel_log(){

        return $this->hasMany('App\PoTravelLog');
    }

    public function role_office(){

        return $this->hasMany('App\RoleOffice');
    }
}
