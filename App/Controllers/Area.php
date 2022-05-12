<?php

namespace App\Controllers;


class Area implements InterfaceControladorRequisicao
{
    public function processRequestPolygon() :void
    {
        $parS1 = filter_input(INPUT_POST,'s1',FILTER_DEFAULT);
        $parS2 = filter_input(INPUT_POST,'s2',FILTER_DEFAULT);


        exit(json_encode(
            [
                'status' => false,
                'data' => [$parS1, $parS2],
                'code' => ''
            ]
        ));
        
    }
}