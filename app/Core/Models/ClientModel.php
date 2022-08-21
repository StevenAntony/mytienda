<?php 

namespace App\Core\Models;

class ClientModel
{
   private $code;

   private $type;

   private $name;

   private $firstName;

   private $lastName;

   private $businessName;
   
   private $tradename;
   
   private $documentType;
   
   private $document;
   
   private $address;
   
   private $city;
   
   private $phone;
   
   private $email;
   
   public function getCode():int
   {
      return $this->code;
   }

   public function setCode(int $code)
   {
      $this->code = $code;

      return $this;
   }

   public function getDocument():string
   {
      return $this->document;
   }

   public function setDocument(string $document)
   {
      $this->document = $document;

      return $this;
   }

   public function getType():string
   {
      return $this->type;
   }

   public function setType(string $type)
   {
      $this->type = $type;

      return $this;
   }

   public function getName():string
   {
      return $this->name;
   }

   public function setName(string $name)
   {
      $this->name = $name;

      return $this;
   }

   public function getBusinessName():string
   {
      return $this->businessName;
   }

   public function setBusinessName(string $businessName)
   {
      $this->businessName = $businessName;

      return $this;
   }

   public function getFirstName():string
   {
      return $this->firstName;
   }

   public function setFirstName(string $firstName)
   {
      $this->firstName = $firstName;

      return $this;
   }

   public function getTradename():string
   {
      return $this->tradename;
   }

   public function setTradename(string $tradename)
   {
      $this->tradename = $tradename;

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

   public function getCity():string
   {
      return $this->city;
   }

   public function setCity(string $city)
   {
      $this->city = $city;

      return $this;
   }

   public function getPhone():string
   {
      return $this->phone;
   }

   public function setPhone(string $phone)
   {
      $this->phone = $phone;

      return $this;
   }

   public function getEmail():string
   {
      return $this->email;
   }

   public function setEmail(string $email)
   {
      $this->email = $email;

      return $this;
   }

   public function getLastName():string
   {
      return $this->lastName;
   }

   public function setLastName(string $lastName)
   {
      $this->lastName = $lastName;

      return $this;
   }

   public function getAddress():string
   {
      return $this->address;
   }

   public function setAddress(string $address)
   {
      $this->address = $address;

      return $this;
   }
}
