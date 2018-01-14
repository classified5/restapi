<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shelf extends Model
{
    use SoftDeletes;

    protected $table = 'shelf';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    public $incrementing = true;

    protected $fillable = [
        'shelf_name',
        'location_id',
    ];

    public function shelfManyGoods(){
        return $this->hasMany('App\Models\Goods');
    }

    public function warehouse(){
        return $this->belongsTo('App\Models\Warehouse');
    }


}
