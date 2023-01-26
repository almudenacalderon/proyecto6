<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    const KEYS = array(
        'id' => 'uri',
        'label' => 'label',
        'image' => 'image',
    );
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $attributes = parent::toArray($request);
        $id = substr($attributes['recipe']['uri'], -32);
        // return parent::toArray($request);
        return [
            'id' => $id,
            'attributes' => self::getAttributes($attributes)
        ];
    }

    public static function getAttributes($data)
    {
        $attributes = array();

        foreach(self::KEYS as $key => $field) {
            $attributes[$key] = self::getFirstElementRecursive($data['recipe'][$field]);
        }
        return $attributes;
    }

    public static function getFirstElementRecursive($dataArray) {
        return is_array($dataArray) ? self::getFirstElementRecursive($dataArray[0]) : $dataArray;
    }
}

