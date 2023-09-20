<?php

namespace App\DeliveryServices;

use App\DeliveryServices\Company;

class TransCompany extends Company
{

    public function getCost($weight)
    {
        if($weight <= 10 && $weight > 0){
            return 20;
        }elseif($weight > 10){
            return 100;
        }else{
            return "Invalid weight";
        }
    }
}
