<?php

namespace App\Helper;

class CalcularArea
{
    private $tipoForma;

    public function calcularAreaTotal(int $side1, int $side2)
    {
            $rst = SELF::calcAreaPolygon( $side1,  $side2);
    }


    public function calcAreaPolygon(int $height, int $base)
    {
    
        return ($height * $base);
        
    }



}
