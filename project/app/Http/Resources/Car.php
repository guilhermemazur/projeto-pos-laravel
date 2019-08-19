<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Car extends Resource
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
            'model' => $this->model,
            'year' => $this->year,
            'car_brand' => $this->car_brand->brand,
            'created_at' => format_date($this->created_at),

            'links' => [
                'edit' => $this->when(true, route('cars.edit', $this->id)),
                'show' => $this->when(true, route('cars.show', $this->id)),
                'destroy' => $this->when(true, route('cars.destroy', $this->id)),
            ],
        ];
    }
}
