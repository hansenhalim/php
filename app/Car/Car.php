<?php

namespace App\Car;

class Car
{
    public const REPAIR_MILEAGE_THRESHOLD = 10000;

    public function __construct(
        public int $id,
        public string $model,
        public int $year,
        public int $mileage
    ) {}

    public function isEligibleForRepair(): bool
    {
        return $this->mileage > self::REPAIR_MILEAGE_THRESHOLD;
    }
}
