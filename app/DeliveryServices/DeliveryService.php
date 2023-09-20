<?php

namespace App\DeliveryServices;

class DeliveryService
{
    static public function calculateDeliveryCost($id, $weight){
        $deliveryService = \App\Models\DeliveryService::find($id);
        if (class_exists($deliveryService->path_name)) {
            // Create an instance of the class
            $object = new $deliveryService->path_name();

            // Check if the method exists in the class
            return call_user_func([$object, 'getCost'], $weight);
        }else{
            return 0;
        }
    }
}
