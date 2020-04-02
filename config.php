<?php

use Psr\Container\ContainerInterface;
use function DI\factory;
use Psr\Log\NullLogger;
use Calculator\Library\Math;
use Calculator\Library\Arguments;

return [
    'version' => 1,
    'Arguments' => function (ContainerInterface $c) {
        return new Arguments(
            $c->get('Logger'),
            $c->get('version')
        );
    },
    'Logger' => function (ContainerInterface $c) {
        return new NullLogger();
    },
    'Math' => function (ContainerInterface $c) {
        return new Math(
            $c->get('Logger'),
            $c->get('version')
        );
    }
];