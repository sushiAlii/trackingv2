<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpmpTravelLog extends Model
{
    use HasFactory;

    protected $fillable = ['task'];

    protected $guarded = [
        'date_arrived',
        'office',
        'ppmp_id'
    ];

    public $timestamps = false;
    public function ppmp(){
        return $this->belongsTo('App\ppmp');
    }

    
}
