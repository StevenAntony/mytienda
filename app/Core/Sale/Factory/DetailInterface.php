<?php
namespace App\Core\Sale\Factory;

interface DetailInterface
{
    public function getPresentationCode(): int;
    public function getDescription(): string;
    public function getUnit(): string;
    public function getPrice(): float;
    public function getCost(): float;
    public function getAmount(): float;  
    public function getSubTotal(): float;
}