<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['product_id','trx_date','price'];

    public function products(){
        return $this->belongsTo(\App\Models\Product::class,'product_id','id');
    }

}
