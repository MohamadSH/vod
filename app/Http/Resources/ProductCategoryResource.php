<?php

namespace App\Http\Resources;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use JsonSerializable;

class ProductCategoryResource extends AlaaJsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this['name'],
            'value' => $this['value'],
            'selected' => $this['selected']
        ];
    }
}
