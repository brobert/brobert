<?php

namespace App\Http\Resources;

use App\Http\Resources\CommonResource;

class RunkeeperResource extends CommonResource
{
    
    protected $service = 'RunKeeper';
    
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
