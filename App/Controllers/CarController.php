<?php

namespace App\Controllers;

use App\Models\Car;

class CarController
{
    public function index()
    {
        $cars = Car::getAll();
        return view('cars/cars', ['cars' => $cars]);
    }

    public function create()
    {
        return view('cars/create');
    }

    public function store($data)
    {
        Car::create($data);
        header('location: /cars');
        exit;
    }

    public function edit($id)
    {
        $car = Car::find($id);
        if (!$car) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }
        return view('cars/edit', ['car' => $car]);
    }

    public function update($id, $data)
    {
        Car::update($id, $data);
        header('location: /cars');
        exit;
    }

    public function delete($id)
    {
        $car = Car::find($id);
        return view('cars/delete', ['car' => $car]);
    }

    public function destroy($id)
    {
        Car::delete($id);
        header('location: /cars');
    }
}
