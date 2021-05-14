<?php
declare(strict_types=1);

namespace App\Application\Actions\Client;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;
use App\Config\db;
use PDO;

class CreateClient extends Action
{
    protected function action(): Response
    {
        /* $nombre = $this->resolvePar('nombre');
        $apellidos = $this->resolvePar('apellidos');
        $edad = $this->resolvePar('edad');
        
        $sql = "INSERT INTO clientes (nombre, apellidos, edad) VALUES 
                (:nombre, :apellidos, :edad)";
        try{
            $db = new db();
            $db = $db->connectionDB();
            $resultado = $db->prepare($sql);

            $resultado->bindParam(':nombre', $nombre);
            $resultado->bindParam(':apellidos', $apellidos);
            $resultado->bindParam(':edad', $edad);

            $resultado->execute();
            return $this->respondWithData("Nuevo cliente guardado.");  

            $resultado = null;
            $db = null;
        }catch(PDOException $e){
            return $this->respondWithData($e->getMessage());
        } */
        return $this->respondWithData($this->resolvePar('nombre'));
    }
}