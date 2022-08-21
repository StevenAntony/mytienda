<?php
namespace App\Core\Sale\Factory\Template;

use App\Core\Sale\Factory\PaymentInterface;

class PaymentTemplate implements PaymentInterface
{
    private $paymentModeCode;
    
    private $boxCode;

    private $date;

    private $price;

    private $turned;

    public function __construct(
        int $paymentModeCode,
        int $boxCode,
        string $date,
        float $price,
        float $turned
    ) 
    {
        $this->paymentModeCode  = $paymentModeCode;
        $this->boxCode          = $boxCode;
        $this->date             = $date;
        $this->price            = $price;
        $this->turned           = $turned;
    }

    public function getPaymentModeCode(): int
    {
        return $this->paymentModeCode;
    }

    public function getBoxCode(): int
    {
        return $this->boxCode;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTurned(): float
    {
        return $this->turned;
    }
}