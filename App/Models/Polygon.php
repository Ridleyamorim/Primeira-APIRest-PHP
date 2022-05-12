<?php

namespace App\Models;

class Polygon
{
    private string $table = 'polygons'; //MUDAR TABLE NO BANCO DE DADOS!

    public function setSides(string $type1, int $height, int $base, int $area) :array
    {

    try {

        //busca no config.php os dados para PDO.
        $connPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

        $sql = "INSERT INTO {$this->table} (type1, height, base, area) VALUE (:tp, :ht, :bs, :ar)";

        $stmt = $connPDO->prepare($sql);

        $stmt->bindValue(':tp', $type1);
        $stmt->bindValue(':ht', $height);
        $stmt->bindValue(':bs', $base);
        $stmt->bindValue(':ar', $area);

        $stmt->execute();

        if($stmt->rowCount() > 0) {

            return  [
                'status' => true,
                'data' => "Success",
                'code' => '200'
            ];

        } else {
            throw new \Exception("Valor não encontrado!", 1);
        }

    } catch (\Exception $e) {
        return  [
            'status' => false,
            'data' => $e->getMessage(),
            'code' => $e->getCode()
        ];
        }
    }

    public function getSumAreas()
    {
        try {

            //busca no config.php os dados para PDO.
            $connPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
    
            $sql = "SELECT SUM(area) AS Total_area FROM polygons";
    
            $stmt = $connPDO->prepare($sql);

            $stmt->execute();

    
            if($stmt->rowCount() > 0) {
    
                return  [
                    'status' => true,
                    'data' => $stmt->fetch(\PDO::FETCH_ASSOC),
                    'code' => ''
                ];
    
            } else {
                throw new \Exception("Valor não encontrado!", 1);
            }
    
        } catch (\Exception $e) {
            return  [
                'status' => false,
                'data' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }
    }
}
