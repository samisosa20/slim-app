<?php
declare(strict_types=1);

namespace App\Application\Actions\Client;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

class DeleteClient extends Action
{
    protected function action(): Response
    {
        $id_cliente = (int) $this->resolveArg('id');
        $sql = "DELETE FROM clientes WHERE id = $id_cliente";
        return $this->searchDB($sql);
    }
}
