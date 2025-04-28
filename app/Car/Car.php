<?php

namespace App\Car;

class Car
{
    private const REPAIR_MILEAGE_THRESHOLD = 10000;

    private function __construct(
        private int $id,
        private string $model,
        private int $year,
        private int $mileage
    ) {}

    private function isEligibleForRepair(): bool
    {
        return $this->mileage > self::REPAIR_MILEAGE_THRESHOLD;
    }
}
