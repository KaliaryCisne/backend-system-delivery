<?php

namespace App\Http\Controllers\Api\V1\Delivery;


use App\Http\Controllers\Controller;
use App\Delivery;
use App\Http\Requests\Delivery\CreateResquest;

class CreateController extends Controller
{
    public function create(CreateResquest $request)
    {
        try {
            $deliveries = new Delivery();
            $deliveries->create($request->all());

            return $this->responseSuccess("Entrega registrada com sucesso!", 201);

        } catch(\Exception $e) {

            return $this->responseFail($e->getMessage(),500);
        }
    }
}
