<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CarRequest;
use App\Http\Resources\Car as CarResource;
use App\Models\CarBrand;
use App\Repositories\CarRepository;
use App\Repositories\Criterias\Common\CarCriteria;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.index');
    }

    public function create()
    {
        $car_brands = CarBrand::all();

        return view('cars.create', compact('car_brands'));
    }

    public function store(CarRequest $request, CarRepository $carRepository)
    {
        $data = $request->all();

        $carRepository->create($data);

        $message = _m('car.success.create');
        return $this->chooseReturn('success', $message, 'cars.index');
    }

    public function edit(CarRepository $carRepository, $id)
    {
        $car = $carRepository->find($id);
        return view('cars.edit', compact('car'));
    }

    public function update(CarRequest $request, CarRepository $carRepository, $id)
    {
        $data = $request->all();
        $carRepository->update($id, $data);

        $message = _m('car.success.update');
        return $this->chooseReturn('success', $message, 'cars.index');
    }

    public function show(CarRepository $carRepository, $id)
    {
        $user = $carRepository->find($id);

        return view('cars.show', compact('user'));
    }

    public function destroy(CarRepository $carRepository, $id)
    {
        try {
            $carRepository->delete($id);
            return $this->chooseReturn('success', _m('car.success.destroy'));
        } catch (\Exception $e) {
            return $this->chooseReturn('error', _m('car.error.destroy'));
        }
    }

    protected function getPagination($pagination)
    {
        $pagination->repository(CarRepository::class)
        // ->criterias([new CarCriteria])
        ->resource(CarResource::class);
    }
}
