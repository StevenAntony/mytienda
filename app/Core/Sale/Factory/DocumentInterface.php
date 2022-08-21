<?php
namespace App\Core\Sale\Factory;

interface DocumentInterface
{
    public function getClient(): ClientInterface;
    public function getDocumentType(): string;
    public function getSerie(): string;
    public function getCorrelative(): int;
    public function getIssue(): string;
    public function getPaymentType(): string;  
    public function getAdditional(): float;   
    public function getPartialProduct(): string;   
    public function getTypeSale(): string;   
    public function getTableCode(): int;   
    public function getBoxCode(): int;
    public function getUserCode(): int;
    public function getIGV(): bool;
}