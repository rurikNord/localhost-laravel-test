<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Heroes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'nickname'       => $this->nickname,
            'real_name'    => (int) $this->real_name,
            'superpowers'     => (int) $this->superpowers,
            'catch_phrase'     => (int) $this->catch_phrase,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
