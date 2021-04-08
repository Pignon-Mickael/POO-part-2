<?php


class Truck extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel'
    ];

    private int $energyLevel;
    private string $energy;
    private int $storageCapacity;
    private int $loading = 0;

    public function __construct(
        string $color,
        int $nbSeats,
        string $energy,
        int $storageCapacity
    ) {

        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function loading(): string
    {
        if ($this->loading === $this->storageCapacity) {
            return 'full';
        } else {
            return 'filling';
        }
    }
}
