<?php
namespace App\Core\Sale\Factory;

interface PaymentInterface
{
    public function getPaymentModeCode(): int;
    public function getBoxCode(): int;
    public function getDate(): string;
    public function getPrice(): float;
    public function getTurned(): float; // Vuelto
}