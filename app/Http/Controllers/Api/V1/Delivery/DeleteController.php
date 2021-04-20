<?php

namespace App\Http\Controllers\Api\V1\Delivery;


use App\Http\Controllers\Controller;
use App\Delivery;

class DeleteController extends Controller
{
    public function delete($id)
    {
        try {
            $delivery = Delivery::findOrFail($id);
            $delivery->delete();

            return $this->responseSuccess("Entrega removida com sucesso", 200);

        } catch(\Exception $e) {
            return $this->responseFail($e->getMessage(),500);
        }
    }
}
