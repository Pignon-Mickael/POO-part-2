<?php

class Vehicle
{

    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats;

    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): self
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
        return $this;
    }

    // moving Bicycle

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // moving Car

    public function start(): string
    {
        $this->currentSpeed = 90;

        return "Start !";
    }

    public function accelerate(): string
    {
        $this->currentSpeed < 90;

        return "speed up !";
    }

    public function stop(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 10;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "stopped !";
        return $sentence;
    }    
}
