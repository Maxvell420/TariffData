<?php
namespace App\Classes;

use DateTime;
use Exception;

class TariffData
{
    private array $types = ['актуальный','архивный','системный'];
    public function __construct(private string $name,
                                private int $price,
                                private DateTime $validity,
                                private mixed $speed,
                                private string $type)
    {
        if (!in_array($type, $this->types)) {
            throw new Exception('Название тарифа не соответствует существующим');
        }
    }
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getValidity(): DateTime
    {
        return $this->validity;
    }
    public function getType(): string{
        return $this->type;
    }
    public function getSpeed()
    {
        return $this->speed;
    }
}