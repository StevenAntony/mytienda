<?php
namespace App\Core\Sale\Factory\Template;

use App\Core\Sale\Factory\ClientInterface;

class ClientTemplate implements ClientInterface
{
    private $code;

    private $documentType;

    private $document;

    private $client;

    private $address;

    private $type;

    public function __construct(
        int $code,
        string $documentType,
        string $document,
        string $client,
        string $address,
        string $type
    ) 
    {
        $this->code         = $code;
        $this->documentType = $documentType;
        $this->document     = $document;
        $this->client       = $client;
        $this->address      = $address;
        $this->type         = $type;
    }

    public function getCode(): int
    {
        return $this->code;
    }
    public function getDocumentType(): string
    {
        return $this->documentType;
    }
    public function getDocument(): string
    {
        return $this->document;
    }
    public function getClient(): string
    {
        return $this->client;
    }
    public function getAddress(): string
    {
        return $this->address;
    }
    public function getType(): string
    {
        return $this->type;
    }  
}