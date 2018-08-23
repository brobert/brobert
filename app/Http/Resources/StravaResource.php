<?php

namespace App\Http\Resources;

use App\Http\Resources\CommonResource;


class StravaResource extends CommonResource
{
    
    protected $service = 'Strava';
    
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
