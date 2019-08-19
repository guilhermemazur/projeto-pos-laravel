<?php

use App\Models\CarBrand;
use Illuminate\Database\Seeder;

class CarBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->brands() as $brand) {
            $model = CarBrand::firstOrNew(["brand" => $brand]);
            $model->save();
        }
    }

    private function brands() {
        return [
            'VW',
            'Ford',
            'Chevrolet',
            'Fiat',
            'Audi',
            'Toyota',
            'Mitsubishi',
            'Honda',
            'Hyundai'
        ];
    }
}
