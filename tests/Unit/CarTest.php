<?php

use App\Car\Car;

it('is eligible for repair when mileage is above the threshold', function () {
    $car = new Car(1, 'Toyota Corolla', 2015, 15000);

    expect($car->isEligibleForRepair())->toBeTrue();
});

it('is not eligible for repair when mileage is below the threshold', function () {
    $car = new Car(1, 'Honda Civic', 2018, 9000);

    expect($car->isEligibleForRepair())->toBeFalse();
});

it('is not eligible for repair when mileage is exactly at the threshold', function () {
    $car = new Car(1, 'Mazda 3', 2020, Car::REPAIR_MILEAGE_THRESHOLD);

    expect($car->isEligibleForRepair())->toBeFalse();
});
