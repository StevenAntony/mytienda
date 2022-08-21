<?php 

namespace App\Core\Models;

use App\Models\Model;

class PaymentModel extends Model
{
    private $payment ;

    private $paymentModeCode ;

    private $boxCode ;

    private $saleCode ;

    private $date ;

    private $turnet;

    public function getPayment():float
    {
        return $this->payment;
    }

    public function setPayment(float $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    public function getPaymentModeCode():int
    {
        return $this->paymentModeCode;
    }

    public function setPaymentModeCode(int $paymentModeCode)
    {
        $this->paymentModeCode = $paymentModeCode;

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

    public function getSaleCode():int
    {
        return $this->saleCode;
    }

    public function setSaleCode(int $saleCode)
    {
        $this->saleCode = $saleCode;

        return $this;
    }

    public function getDate():string
    {
        return $this->date;
    }

    public function setDate(string $date)
    {
        $this->date = $date;

        return $this;
    }

    public function getTurnet():float
    {
        return $this->turnet;
    }

    public function setTurnet(float $turnet)
    {
        $this->turnet = $turnet;

        return $this;
    }
}