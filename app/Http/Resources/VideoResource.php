<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
  
    public function toArray($request)
    {
        return [

            'id'=>$this->id,

            'title'=>$this->title,

            'url'=>'/' . ltrim($this->file, '/')

        ];
    }
}
