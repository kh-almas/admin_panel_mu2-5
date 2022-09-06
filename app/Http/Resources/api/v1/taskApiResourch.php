<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class taskApiResourch extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'category_id' => $this->taskcategory_id,
            'is_important' => $this->important,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
