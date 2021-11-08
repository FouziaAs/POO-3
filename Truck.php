<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $capacity;

    private int $loading=0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->capacity = $capacity;
            
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES))
        $this->energy = $energy;
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function isFull(): string
    {
        $sentence = '';
        if ($this->loading < $this->capacity) {
            $sentence = 'In filling ! ';
        }else {
            $sentence = 'Full ! ';
        }
        return $sentence;
    }


}
    ?>