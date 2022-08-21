<?php
namespace App\Core\Sale\Factory\Template;

use App\Core\Sale\Factory\PaymentListInterface;

class PaymentListTemplate implements PaymentListInterface
{
    private $paymentListTemplate = [];

    public function __construct(array $detailList) {
        foreach ($detailList as $key => $value) {
            $paymentTemplate = new PaymentTemplate(
                $value->getPaymentModeCode(),
                $value->getBoxCode(),
                $value->getDate(),
                $value->getPayment(),
                $value->getTurnet()
            );
            $this->add($paymentTemplate);
        }
    }

    public function add(PaymentTemplate $paymentTemplate):void
    {
        array_push($this->paymentListTemplate,$paymentTemplate);
    }

    public function getPaymentList():array
    {
        return $this->paymentListTemplate;
    }
}
