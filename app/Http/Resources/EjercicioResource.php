<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EjercicioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $rutinas = RutinaResource::collection($this->rutinas);
        return [
            'id' => $this->id,
            'attributes' => parent::toArray($request)+[
                'rutinas' => $rutinas
            ]
        ];
    }
}
