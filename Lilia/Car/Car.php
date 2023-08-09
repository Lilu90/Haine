<?php
namespace Lilia\Car;

class Car extends MotorVehicle
{
    protected int $motor = 120;
    protected int $wheelsNumber = 4;
    protected string $name = "car";

    public static $sheva = 1;

    private array $detalii = [
        "motor" => [
            'power' => 150,
            'gas' => 'disel',
            'producer' => [
                'coutry' => 'itely',
                'company' => 'fiat'
            ],
            'gaz_tank' => [
                'filled' => 70,
                'max' => 100
            ]
        ],
        'interior' => [
            'color' => 'black',
            'material' => 'lather',
            'transmission' => [
                'type' => 'manual',
                'steps' => 5,
                'vin' => '1rk3grk2ur3g',
                'gid' => 'vasea'
            ]
        ]
    ];

    public array $zavod =  [
        'secundary',
        5,
        "working_time" => [
            'from' => '8AM',
            'to' => '5PM'
        ],
        'reception' => 'closed',
        'administration' => [
            'director' => [
                'name' => 'valea',
                'phone' => '12345'
            ],
            'mechanic' => [
                'name' => 'jenea',
                'phone' => '54321'
            ],

        ]
    ];
    public array $codTari = [
        'albania' => '45457',
        'detail' => '78789',
        'lorida' => '909090',
        'venice' => [
            'siesta' => 'ugjhu8',
            'bradenton' => '7573'
        ]
    ];

    public function findDetails(string $key, $array = []): int|string|array
    {
        $arraiuCareOSalFolosim = [];
        if (count($array) > 0) {
            $arraiuCareOSalFolosim = $array;
        } else {
            $arraiuCareOSalFolosim = $this->detalii;
        }
        foreach ($arraiuCareOSalFolosim as $k => $val) {
            if ($key === $k) {
                return $val;
            }
            if (is_array($val)) {
                dump($k);
                $resultat = $this->findDetails($key, $val); //'jggjguj'
                if (!empty($resultat)) {
                    return $resultat;
                }
            }
        }
        return '';
    }
    public function getResponsiblePhone() {
        $procente = $this->findDetails('max');
        $directoru = $this->findDetails('director', $this->zavod);
        $mechanic = $this->findDetails('mechanic', $this->zavod);
        $administratia = $this->findDetails('administration', $this->zavod);
        $town = $this->findDetails('siesta', $this->codTari);


        if ($procente > 100) {
            return $administratia;
        } else {
            return $mechanic;
        }
    }
}






