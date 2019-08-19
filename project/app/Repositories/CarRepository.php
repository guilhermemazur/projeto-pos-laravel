<?php
namespace App\Repositories;

use App\Models\Car;
use App\Repositories\Repository;

class CarRepository extends Repository
{
    protected function getClass()
    {
        return Car::class;
    }
}
