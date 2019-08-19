<?php

namespace App\Http\Controllers;

use App\Repositories\CarBrandRepository;
use App\Repositories\CarRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_usuarios = (new UserRepository)->all()->count();

        $total_marcas = (new CarBrandRepository)->all()->count();

        $total_carros = (new CarRepository)->all()->count();

        return view('home', compact('total_usuarios', 'total_marcas', 'total_carros'));
    }
}
