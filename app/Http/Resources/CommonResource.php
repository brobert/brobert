<?php

namespace App\Http\Resources;

class CommonResource
{
    protected $service = '';

    /**
     * 
     */
    public function getUserInfo() {
        return [
            'user_id' => 12345,
            'name' => ucfirst($this->service) . ' user',
        ];
    }
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
