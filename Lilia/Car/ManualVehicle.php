<?php
namespace Lilia\Car;

use Lilia\Car\VehicleCommon;

class ManualVehicle implements Vehicle
{
    use VehicleCommon;

    public function moveForward(): void
    {
        print("The {$this->name} is moving forward. With {$this->wheelsNumber} wheels.");
    }

    public function moveBack(): void
    {
        print("The {$this->name} is moving back. With {$this->wheelsNumber} wheels.");
    }
}
