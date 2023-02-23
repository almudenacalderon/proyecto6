<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RutinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $ejercicio = EjercicioResource::collection($this->ejercicios);
        return [
            'id' => $this->id,
            'attributes' => parent::toArray($request)+[
                'ejercicios' => $ejercicio
            ]
        ];
    }
}
