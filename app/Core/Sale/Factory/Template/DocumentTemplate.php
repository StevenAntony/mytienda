<?php
namespace App\Core\Sale\Factory\Template;

use App\Core\Models\ClientModel;
use App\Core\Sale\Factory\ClientInterface;
use App\Core\Sale\Factory\DocumentInterface;
use App\Core\Sale\Factory\Template\ClientTemplate;

class DocumentTemplate implements DocumentInterface
{
    private $documentType;
    
    private $serie;
    
    private $correlative;

    private $issue;

    private $paymentType;

    private $additional;

    private $partialProduct;

    private $typeSale;

    private $tableCode;

    private $boxCode;

    private $userCode;

    private $igv;

    private $client;
    
    public function __construct(
        string $documentType,
        string $serie,
        int $correlative,
        string $issue,
        string $paymentType,
        float $additional,
        string $partialProduct,
        string $typeSale,
        int $tableCode,
        int $boxCode,
        int $userCode,
        bool $igv,
        ClientModel $client
    ) 
    {
        $clientRender = $client->getType() == '01' 
                        ? $clientRender = $client->getName()." ".$client->getFirstName()." ".$client->getLastName()
                        :$clientRender = $client->getBusinessName();

        $this->documentType = $documentType;
        $this->serie        = $serie;
        $this->correlative  = $correlative;
        $this->issue        = $issue;
        $this->paymentType  = $paymentType;
        $this->additional   = $additional;
        $this->partialProduct= $partialProduct;
        $this->typeSale     = $typeSale;
        $this->tableCode    = $tableCode;
        $this->boxCode      = $boxCode;
        $this->userCode     = $userCode;
        $this->igv          = $igv;
        $this->client       = new ClientTemplate(
            $client->getCode(),
            $client->getDocumentType(),
            $client->getDocument(),
            $clientRender,
            $client->getAddress(),
            $client->getType()
        );;
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }
    

    public function getDocumentType(): string
    {
        return $this->documentType;
    }

    public function getSerie(): string
    {
        return $this->serie;
    }
    
    public function getCorrelative(): int
    {
        return $this->correlative;
    }
    public function getIssue(): string
    {
        return $this->issue;
    }
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    public function getAdditional(): float
    {
        return $this->additional;
    }
    public function getPartialProduct(): string
    {
        return $this->partialProduct;
    }  
    public function getTypeSale(): string
    {
        return $this->typeSale;
    } 
    public function getTableCode(): int
    {
        return $this->tableCode;
    }   
    public function getBoxCode(): int
    {
        return $this->boxCode;
    }
    public function getUserCode(): int
    {
        return $this->userCode;
    }
    public function getIGV(): bool
    {
        return $this->igv;
    }
}