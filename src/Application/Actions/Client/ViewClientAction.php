<?php
declare(strict_types=1);

namespace App\Application\Actions\Client;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

class ViewClientAction extends Action
{
    protected function action(): Response
    {
        $sql = "SELECT * FROM clientes";
        return $this->searchDB($sql);
    }
}
