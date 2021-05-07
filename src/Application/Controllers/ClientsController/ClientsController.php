<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

namespace App\Application\Controllers\ClientsController;

class ClientsController
{
    public static function getAll(Request $request, Response $response)
    {
        /* $sql = "SELECT * FROM clientes";
        try {
            $db = new db();
            $db = $db->connectionDB();
            $result = $db->query($sql);

            if ($result->rowCount() > 0) {
                $clients = $result->fetchAll(PDO::FETCH_OBJ);
                return json_encode($clients);
            } else {
                return json_encode('{"data" : "No existe clientes en la DB"}');
            }
            $db = null;
            $result = null;
        }catch(PDOException $e) {
            return '{"error" : {"text" : '.$e.getMessage().'}}';
        } */
        $response->getBody()->write('Hello world!');
        return $response;
    }
}