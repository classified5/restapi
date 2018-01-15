<?php
/**
 * Created by PhpStorm.
 * User: AI
 * Date: 15/01/18
 * Time: 22:23
 */

namespace App\Api\V1\Transformers;


use League\Fractal\TransformerAbstract;

class BaseTransformer extends TransformerAbstract
{
    public function transform()
    {
        return [
            'null'  =>  'null'
        ];
    }
}