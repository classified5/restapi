<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Api\V1\Requests\StoreGoodsRequest;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use App\Models\Shelf;
use Dingo\Api\Routing\Helpers;
use App\Api\V1\Transformers\GoodsTransformer;

class GoodsController extends Controller
{
    use Helpers;

    public function index(){
    	$goods = Goods::all();

//    	$goods = Goods::with('')

    	return $this->collection($goods, new GoodsTransformer, ['key' => '200,success']);

    }

    public function store(StoreGoodsRequest $request){

    	if(Goods::Create($request->all())) {
    		return $this->response->created();
    	}

    	return $this->response->errorBadRequest();

    }
}
