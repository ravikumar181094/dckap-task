<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use Facades\App\Services\CarService;
use Illuminate\Http\Request;

class CarsController extends ResponseController
{
    public function save(CarRequest $request)
    {
        CarService::addCar($request);
        return $this->sendResponse([], 'Car Details Added Successfully', 200, 'send-response');
    }

    public function search(Request $request)
    {
        $data = CarService::searchCar($request);
        return $this->sendResponse($data, 'Car Details Added Successfully', 200, 'send-data');
    }
}
