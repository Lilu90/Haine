<?php

use Lilia\Car\Car;


if (! function_exists('lilia')) {
    function lilia(): void {


        $mashina = new Car();
        $motor = $mashina->findDetails('motor');
        $vin = $mashina->findDetails('vin');

        $person = $mashina->getResponsiblePhone('venice');

        dd("Name: {$person['name']}, Phone: {$person['phone']}");
    }
}


