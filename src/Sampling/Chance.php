<?php

namespace OveD\Apm\Sampling;

class Chance implements SamplerInterface
{
    /**
     * @var int
     */
    private $chance;

    public function __construct(int $chance)
    {
        $this->chance = $chance;
    }

    public function shouldSample(): bool
    {
        $random = mt_rand(1, 100);
        if ($random <= $this->chance) {
            return true;
        }

        return false;
    }
}
