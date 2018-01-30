<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\UpdateGoodsRequest;
use App\Api\V1\Transformers\BaseTransformer;
use Illuminate\Http\Request;
use App\Api\V1\Requests\StoreGoodsRequest;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\Api\V1\Transformers\GoodsTransformer;
use App\Api\V1\Repositories\GoodsRepository;

class GoodsController extends Controller
{
    use Helpers;

    protected $goodsRepo;

    /**
     * GoodsController constructor.
     * @param $goodsRepo
     */
    public function __construct(GoodsRepository $goodsRepo)
    {
        $this->goodsRepo = $goodsRepo;
    }


    public function index()
    {
    	$goods = $this->goodsRepo->getAllGoods();

    	return $this->collection($goods, new GoodsTransformer, ['key' => '200,success']);
    }

    public function create(StoreGoodsRequest $request)
    {
        $data = new \stdClass();
    	if($this->goodsRepo->store($request->all())) {
    		return $this->response->item($data, new BaseTransformer(), ['key' => '201,created']);
    	}

    	return $this->response->errorBadRequest();

    }

    public function update(UpdateGoodsRequest $request, $id)
    {
        $goods = $this->goodsRepo->find($id);

        if ($goods){
            $data = $this->goodsRepo->update($request->all(), $goods);
        }else{
            return $this->response->errorNotFound();
        }

        if($data){
            return $this->response->item($goods, new BaseTransformer(), ['key' => '200,updated']);
        }else{
            return $this->response->errorInternal("Failed to update!");
        }


    }

}
