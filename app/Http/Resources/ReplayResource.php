<?php

namespace App\Http\Resources;

use App\Models\Replay;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //"parent_id","post_id","user_id"


        return [
            "id" => $this->id,
            "body" => $this->body,
            "post_id" => $this->post_id,
            "user_id" => $this->user_id,
            "replays" => ReplayResource::collection( Replay::where('parent_id','=', $this->id)->paginate('10') )
        ];
    }
}
