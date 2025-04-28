<?php

namespace App\Car;

class UseCaseImpl implements UseCase
{
    public function getCarByID(int $id): DTO\GetCarByIDResponse
    {
        return new DTO\GetCarByIDResponse($id, 'Toyota Corolla', 2015, 15000);
    }
}
