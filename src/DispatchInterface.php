<?php
declare(strict_types=1);

namespace Polus\Polus_Interface;

use Aura\Router\Route;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface DispatchInterface
{
    public function dispatch(Route $route, ServerRequestInterface $request, ResponseInterface $response);
}
