<?php

namespace Calculator\Library;

use Calculator\Library\MathInterface;
use Psr\Log\LoggerInterface;

class Math implements MathInterface
{
    private $logger;
    private $version;

    public function __construct(LoggerInterface $logger, int $version)
    {
        $this->logger = $logger;
        $this->version = $version;
    }

    public function add(float $a, float $b): float
    {
        $this->logger->info(
            sprintf(
                'Adding %f %f',
                $a,
                $b
            )
        );

        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        $this->logger->info(
            sprintf(
                'Subtracting %f %f',
                $a,
                $b
            )
        );
        
        return $a - $b;
    }

    public function divide(float $a, float $b): float
    {
        $this->logger->info(
            sprintf(
                'Dividing %f %f',
                $a,
                $b
            )
        );
        
        return $a / $b;
    }
    
    public function multiply(float $a, float $b): float
    {
        $this->logger->info(
            sprintf(
                'Multiplying %f %f',
                $a,
                $b
            )
        );
        
        return $a * $b;
    }
}
