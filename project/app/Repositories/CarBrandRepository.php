<?php
namespace App\Repositories;

use App\Models\CarBrand;
use App\Repositories\Repository;

class CarBrandRepository extends Repository
{
    protected function getClass()
    {
        return CarBrand::class;
    }
}
