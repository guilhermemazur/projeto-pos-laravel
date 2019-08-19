<?php

namespace App\Repositories\Criterias\Common;

use App\Repositories\Criterias\Criteria;
use App\Repositories\Repository;

class CarCriteria extends Criteria
{
    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder
            ->select([
                'cars.id',
                'cars.model',
                'cars.year',
                'car_brands.brand'
            ])
            ->join('car_brands', 'cars.car_brand_id', '=', 'car_brands.id');
    }
}