<?php

namespace Calculator\Library;

use Calculator\Exception\CalculatorException;
use Psr\Log\LoggerInterface;

class Arguments
{
    private $logger;
    private $version;

    public function __construct(LoggerInterface $logger, int $version)
    {
        $this->logger = $logger;
        $this->version = $version;
    }

    public function get(string $key): string
    {
        $options = getopt("m:a:b:");

        if (empty($options[$key])) {
            throw new CalculatorException('Key does not exist');
        }

        $value = strval($options[$key]);

        if (gettype($options[$key] !== 'string')) {
            throw new CalculatorException('Incorrect type');
        }

        return $value;
    }
}
