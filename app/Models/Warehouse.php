<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use SoftDeletes;

    protected $table = 'warehouse';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    public $incrementing = true;

    protected $fillable = [
        'warehouse_name',
        'address',
    ];

    public function warehouseManyShelf(){
        return $this->hasMany('App\Models\Shelf');
    }


}
