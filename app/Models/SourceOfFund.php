<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceOfFund extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'description'
    ];

    public $timestamps = false;

    public function ppmp(){
        return $this->hasMany('App\ppmp');
    }
}
