<?php

namespace App\Car\DTO;

class GetCarByIDResponse
{
    public function __construct(
        public int $id,
        public string $model,
        public int $year,
        public int $mileage
    ) {}
}
