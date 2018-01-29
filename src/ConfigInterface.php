<?php
declare(strict_types=1);

namespace Polus\Polus_Interface;

use Psr\Container\ContainerInterface;

interface ConfigInterface
{
    public function config(ContainerInterface $container): ContainerInterface;
}
