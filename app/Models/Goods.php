<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goods extends Model
{
	use SoftDeletes;

    protected $table = 'goods';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    public $incrementing = true;

    protected $fillable = [
    	'name',
    	'quantity',
    ];

    public function shelf(){
        return $this->hasMany('App\Models\Shelf');
    }


}
