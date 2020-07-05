<?php

namespace Ngutex\Elparithm;

use Ngutex\Elparithm\Abstracts\Algorithm;

class Topsis extends Algorithm
{
    private $alternatives;
    private $criterias;
    private $weights;

    public function __construct(array $alternatives, array $criterias, array $weights)
    {
        $this->alternatives = $alternatives;
        $this->criterias    = $criterias;
        $this->weights      = $weights;
    }

    private function validation(): bool
    {
        return true;
    }

    private function normalizationMatrix(): array
    {
        return [];
    }

    private function weightedNormalizationMatrix(): array
    {
        return [];
    }

    private function aVector(): array
    {
        return [];
    }

    private function dVector(): array
    {
        return [];
    }

    private function preferences(): array
    {
        return [];
    }

    private function ranking(): array
    {
        return [];
    }

    public function result()
    {
        return 1;
    }
}
