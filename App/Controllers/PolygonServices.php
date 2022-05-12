<?php

namespace App\Controllers;

use App\Models\Polygon;

class PolygonServices implements InterfaceControladorRequisicao
{
    public function processRequestPolygon(): void
    {

        if (
            empty(filter_input(INPUT_POST, 'tp', FILTER_DEFAULT))
            ||  empty(intval(filter_input(INPUT_POST, 'ht', FILTER_DEFAULT)))
            ||  empty(intval(filter_input(INPUT_POST, 'bs', FILTER_DEFAULT)))
        ) {
            exit(json_encode(
                [
                    'status' => 'erro nos parametros.',
                    'data' => '',
                    'code' => '000'
                ]
            ));
        }

        try {

            //filtrando os dados enviados por POST e garantindo que são inteiros
            $parType = filter_input(INPUT_POST, 'tp', FILTER_DEFAULT);
            $parHeight = intval(filter_input(INPUT_POST, 'ht', FILTER_DEFAULT));
            $parBase = intval(filter_input(INPUT_POST, 'bs', FILTER_DEFAULT));
            $parArea = $parHeight * $parBase;

            $sides = new Polygon();
            $rst = $sides->setSides($parType, $parHeight, $parBase, $parArea);

            exit(json_encode($rst));

        } catch (\Exception $e) {

            exit(json_encode(
                [
                    'status' => false,
                    'data' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ));
        }
    }

    public function getTotal()
    {
        try {

           
            $rsp = new Polygon();
            $total = $rsp->getSumAreas();
            
            //busca no model se ouve algum erro com a requisição no banco de dados
            if ($total['status']) {
                exit(json_encode(
                    [
                        'status' => true,
                        'data' => $total['data'],
                        'code' => ''
                    ]
                ));

            } else {
                throw new \Exception("Error Processing Request", 1);
                
            }

        } catch (\Exception $e) {
            
            exit(json_encode(
                [
                    'status' => false,
                    'data' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ));
        }

    }
}
