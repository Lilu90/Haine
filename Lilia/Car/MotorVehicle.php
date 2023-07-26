<?php
namespace Lilia\Car;

use Lilia\Car\Vehicle;
use Lilia\Car\VehicleCommon;

class MotorVehicle implements Vehicle
{
    use VehicleCommon;

    protected int $motor = 1;

    public function moveForward(): void
    {
        print("The {$this->name} is moving forward. With {$this->wheelsNumber} wheels and has {$this->motor} horse power.");
    }

    public function moveBack(): void
    {
        print("The {$this->name} is moving back. With {$this->wheelsNumber} wheels and has {$this->motor} horse power.");
    }

}
