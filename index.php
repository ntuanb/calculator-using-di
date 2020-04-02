<?php

require_once('vendor/autoload.php');

use DI\ContainerBuilder;

$builder = new ContainerBuilder();

$builder->addDefinitions('config.php');

$container = $builder->build();

$math = $container->get('Math');
$args = $container->get('Arguments');

$result = $math->{$args->get('m')}(
    $args->get('a'),
    $args->get('b')
);

print_r(sprintf(
    'Result for method %s values %.5f and %.5f: %.5f' . PHP_EOL,
    $args->get('m'),
    $args->get('a'),
    $args->get('b'),
    $result
));