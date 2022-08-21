<?php
namespace App\Core\Sale\Factory\Template;

class DetailTemplate implements \App\Core\Sale\Factory\DetailInterface
{
    private $presentationCode;

    private $description;

    private $unit;

    private $price;

    private $cost;

    private $amount;

    private $subTotal;

    public function __construct(
        int $presentationCode,
        string $description,
        string $unit,
        float $price,
        float $cost,
        float $amount
    ) 
    {
        $this->presentationCode = $presentationCode;
        $this->description      = $description;
        $this->unit             = $unit;
        $this->price            = $price;
        $this->cost             = $cost;
        $this->amount           = $amount;
        $this->subTotal         = $this->price * $this->amount;
    }

    public function getPresentationCode(): int
    {
        return $this->presentationCode;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function getUnit(): string
    {
        return $this->unit;
    }
    
    public function getPrice(): float
    {
        return $this->price;
    }
    
    public function getCost(): float
    {
        return $this->cost;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }  

    public function getSubTotal(): float
    {
        return $this->subTotal;
    }
}
