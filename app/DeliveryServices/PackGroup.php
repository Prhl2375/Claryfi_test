<?php

namespace App\DeliveryServices;

use App\DeliveryServices\Company;

class PackGroup extends Company
{

    public function getCost($weight)
    {
        if ($weight > 0){
            return $weight;
        }else{
            return 'invalid weight';
        }
    }
}
