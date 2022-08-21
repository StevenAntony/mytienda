<?php
namespace App\Core\Sale\Factory;

use App\Core\Sale\Factory\Template\PaymentTemplate;

interface PaymentListInterface
{
    public function add(PaymentTemplate $paymentTemplate):void;
}