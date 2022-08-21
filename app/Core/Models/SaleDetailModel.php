<?php 

namespace App\Core\Models;

use App\Models\Model;

class SaleDetailModel extends Model
{
    private $saleCode ;

    private $presentationCode ;

    private $description ;

    private $unit ;

    private $price ;

    private $cost;

    private $amount;

    public function getPresentationCode():int
    {
        return $this->presentationCode;
    }

    public function setPresentationCode(int $presentationCode)
    {
        $this->presentationCode = $presentationCode;

        return $this;
    }

    public function getSaleCode():int
    {
        return $this->saleCode;
    }

    public function setSaleCode(int $saleCode)
    {
        $this->saleCode = $saleCode;

        return $this;
    }

    public function getDescription():string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    public function getUnit():string
    {
        return $this->unit;
    }

    public function setUnit(string $unit)
    {
        $this->unit = $unit;

        return $this;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }

    public function getCost():float
    {
        return $this->cost;
    }

    public function setCost(float $cost)
    {
        $this->cost = $cost;

        return $this;
    }

    public function getAmount():float
    {
        return $this->amount;
    }

    public function setAmount(float $amount)
    {
        $this->amount = $amount;

        return $this;
    }
}