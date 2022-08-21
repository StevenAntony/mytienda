<?php 

namespace App\Core\Models;

use App\Core\Models\ClientModel;

class SaleModel
{
   private $code;

   private $documentType;
    
   private $serie;
   
   private $correlative;

   private $issue;

   private $paymentType;

   private $additional;

   private $partialProduct;

   private $typeSale;

   private $tableCode = -1;

   private $boxCode;

   private $userCode;

   private $igv;

   private $client;

   public function getCode():int
   {
      return $this->code;
   }
   
   public function setCode(int $code)
   {
      $this->code = $code;
      
      return $this;
   }

   public function getDocumentType():string
   {
      return $this->documentType;
   }

   public function setDocumentType(string $documentType)
   {
      $this->documentType = $documentType;

      return $this;
   }

   public function getSerie():string
   {
      return $this->serie;
   }

   public function setSerie(string $serie)
   {
      $this->serie = $serie;

      return $this;
   }

   public function getCorrelative():int
   {
      return $this->correlative;
   }

   public function setCorrelative(int $correlative)
   {
      $this->correlative = $correlative;

      return $this;
   }

   public function getIssue():string
   {
      return $this->issue;
   }

   public function setIssue(string $issue)
   {
      $this->issue = $issue;

      return $this;
   }

   public function getPaymentType():string
   {
      return $this->paymentType;
   }

   public function setPaymentType(string $paymentType)
   {
      $this->paymentType = $paymentType;

      return $this;
   }

   public function getAdditional():float
   {
      return $this->additional;
   }

   public function setAdditional(float $additional)
   {
      $this->additional = $additional;

      return $this;
   }

   public function getPartialProduct():string
   {
      return $this->partialProduct;
   }

   public function setPartialProduct(string $partialProduct)
   {
      $this->partialProduct = $partialProduct;

      return $this;
   }

   public function getTypeSale():string
   {
      return $this->typeSale;
   }

   public function setTypeSale(string $typeSale)
   {
      $this->typeSale = $typeSale;

      return $this;
   }
 
   public function getTableCode():int
   {
      return $this->tableCode;
   }

   public function setTableCode(int $tableCode)
   {
      $this->tableCode = $tableCode;

      return $this;
   }

   public function getBoxCode():int
   {
      return $this->boxCode;
   }

   public function setBoxCode(int $boxCode)
   {
      $this->boxCode = $boxCode;

      return $this;
   }

   public function getUserCode():int
   {
      return $this->userCode;
   }

   public function setUserCode(int $userCode)
   {
      $this->userCode = $userCode;

      return $this;
   }

   public function getIgv():bool
   {
      return $this->igv;
   }

   public function setIgv(bool $igv)
   {
      $this->igv = $igv;

      return $this;
   }

   public function getClient():ClientModel
   {
      return $this->client;
   }

   public function setClient(ClientModel $client)
   {
      $this->client = $client;

      return $this;
   }
}
