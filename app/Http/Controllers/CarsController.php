<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Requests\CarRequest;
use Facades\App\Services\CarService;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CarsController extends Controller
{
    public function list()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        return view('cars.list')->with([
            'cars' => $cars 
        ]);
    }

    public function add()
    {
        return view('cars.add');
    }

    public function save(CarRequest $request)
    {
        CarService::addCar($request);
        Toastr::success('New Car Details Added');
        return redirect(route('cars.list'));
    }

    public function edit($id)
    {
        $car = Car::where('id', $id)->first();
        return view('cars.edit')->with([
            'car' => $car
        ]);
    }

    public function update(CarRequest $request)
    {
        CarService::updateCar($request);        
        Toastr::success('Car Details Updated');
        return redirect(route('cars.list'));
    }

    public function delete($id)
    {
        Car::where('id', $id)->delete();        
        Toastr::success('Car Details Deleted');
        return redirect(route('cars.list'));
    }
}
