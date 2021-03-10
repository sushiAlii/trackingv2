<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'ppmp_id',
        'quantity'
    ];

    public $timestamps = false;

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function ppmp(){
        return $this->belongsTo('App\ppmp');
    }
}
