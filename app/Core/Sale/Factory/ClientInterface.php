<?php
namespace App\Core\Sale\Factory;

interface ClientInterface
{
    public function getCode(): int;
    public function getDocumentType(): string;
    public function getDocument(): string;
    public function getClient(): string;
    public function getAddress(): string;
    public function getType(): string;  
}