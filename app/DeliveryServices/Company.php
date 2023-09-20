<?php

namespace App\DeliveryServices;

abstract class Company
{
    abstract public function getCost($weight);
}
