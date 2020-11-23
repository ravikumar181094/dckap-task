<?php


namespace App\Services;

use App\Car;

class CarService
{
    public function addCar($request)
    {    
        $new = new Car();
        $new->company = $request->company;
        $new->model = $request->model;
        $new->owner_name = $request->owner_name;
        $new->address = $request->address;
        $new->vehicle_number = $request->vehicle_number;
        $new->price = $request->price;
        $new->save();
        
        return true;
    }

    public function updateCar($request)
    {    
        $old = Car::find($request->id);
        $old->company = $request->company;
        $old->model = $request->model;
        $old->owner_name = $request->owner_name;
        $old->address = $request->address;
        $old->vehicle_number = $request->vehicle_number;
        $old->price = $request->price;
        $old->save();

        return true;
    }

    public function searchCar($request)
    {   
        $query = Car::orderBy('id', 'desc');

        if($request->company){
            $query->where('company', 'like', '%'.$request->company_name.'%');
        }
        if($request->vehicle_number){
            $query->where('vehicle_number', 'like', '%'.$request->vehicle_number.'%');
        }
        $data = $query->get();
        return $data;
    }





}
