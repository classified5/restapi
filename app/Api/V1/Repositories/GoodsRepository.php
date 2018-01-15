<?php
/**
 * Created by PhpStorm.
 * User: AI
 * Date: 15/01/18
 * Time: 20:20
 */

namespace App\Api\V1\Repositories;
use App\Models\Goods;

class GoodsRepository
{
    public function find($id)
    {
        $data = Goods::find($id);

        return $data;
    }

    public function getAllGoods()
    {
        return Goods::all();
    }

    public function store($input)
    {
        $data = Goods::create($input);

        if ($data){
            return $data;
        }

        return false;
    }

    public function update($input, $data)
    {
//        $data = $this->find($id);
        $data->fill($input);

        if ($data){
            return $data;
        }

        return false;

    }


}