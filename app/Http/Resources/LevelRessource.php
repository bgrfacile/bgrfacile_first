<?php

namespace App\Http\Resources;

use App\Models\Levels;
use Illuminate\Http\Resources\Json\JsonResource;

class LevelRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'subjects'=>SubjectsRessource::collection(Levels::find($this->id)),
        ];
    }
}
