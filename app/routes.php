<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Actions\Client\ViewClientAction;
use App\Application\Actions\Client\ListClient;
use App\Application\Actions\Client\DeleteClient;
use App\Application\Actions\Client\CreateClient;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;


return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->group('/api/v1', function (Group $group) {
        $group->get('', function (Request $request, Response $response) {
            $response->getBody()->write('Hello world!');
            return $response;
        });
        $group->get('/clients', ViewClientAction::class);
        $group->get('/client/{id}', ListClient::class);
        $group->delete('/client/{id}', DeleteClient::class);
        $group->post('/client/new', CreateClient::class);
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
