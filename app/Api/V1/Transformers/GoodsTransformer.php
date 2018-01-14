<?php
namespace App\Api\V1\Transformers;

use App\Models\Goods;
use League\Fractal\TransformerAbstract;

class GoodsTransformer extends TransformerAbstract
{
    public function transform(Goods $goods)
    {
        return [
            'id'        => (int) $goods->id,
            'name'      => ucfirst($goods->name),
            'quantity'     => (int) $goods->quantity,
        ];
    }
}