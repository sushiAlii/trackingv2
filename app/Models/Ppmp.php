<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppmp extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'account_code',
        'total',
        'type',
        'status',
        'mode_of_procurement',
        'source_of_fund_id'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
    public function source_of_fund(){
        return $this->belongsTo('App\SourceOfFund');
    }

    public function po(){
        return $this->hasOne('App\po');
    }

    public function ppmp_status_log(){
        return $this->hasOne('App\PpmpStatusLog');
    }

    public function ppmp_travel_log(){
        return $this->hasMany('App\PpmpTravelLog');
    }

    public function getStatus(){
        if(($this->status) == 0){
            return "On Standby";
        }
        if(($this->status) == 1){
            return "Ongoing";
        }
        if(($this->status) == 2){
            return "Completed";
        }
    }
}
