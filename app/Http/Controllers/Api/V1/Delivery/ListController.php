<?php

namespace App\Http\Controllers\Api\V1\Delivery;


use App\Http\Controllers\Controller;
use App\Delivery;

class ListController extends Controller
{
    public function list()
    {
        try {
            $deliveries = Delivery::all();

            return $this->responseSuccess($deliveries, 200);

        } catch(\Exception $e) {

            return $this->responseFail($e->getMessage(),500);
        }
    }
}
