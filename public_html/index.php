<?php
header('Content-Type: application/json;charset=utf-8');
require_once '../vendor/autoload.php';

use App\Controllers\PolygonServices;

try {

    
    if ($_GET['url']) {
        $url = explode('/', $_GET['url']);

        if ($url[0] === 'api') {

            array_shift($url);

            if (empty($url)) {
            
                throw new Exception('Erro na Rota.');
            }
            
            if ($url[0] === 'getTotal') {

                $controlador = new PolygonServices();
                $controlador->getTotal();

            } else{

                $controlador = new PolygonServices();
                $controlador->processRequestPolygon();
            }   
        }

    } else {
        throw new Exception('Página não encontrada');
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
