<?php

namespace App\Car;

use App\Car\DTO\GetCarByIDResponse;

interface UseCase
{
    public function getCarByID(int $id): GetCarByIDResponse;
}