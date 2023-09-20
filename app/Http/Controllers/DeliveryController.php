<?php

namespace App\Http\Controllers;

use App\Models\DeliveryService;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index(){
        $services = DeliveryService::all();
        return response()->json($services);
    }

    public function calculate(Request $request){
        $data = $request->json()->all();
        info($data);
        return response()->json([
            'cost' => \App\DeliveryServices\DeliveryService::calculateDeliveryCost($data['id'], $data['weight']),
        ]);
    }
}
