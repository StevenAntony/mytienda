<?php
namespace App\Core\Sale\Farcade;

use App\Core\Models\SaleModel;
use App\Core\Models\PaymentModel;
use App\Core\Models\SaleDetailModel;
use App\Core\Sale\Factory\Template\SaleTemplate;

class Sale
{

    private $saleTemplate;

    private $sale;
    
    private $detailList = [];

    private $paymentList = [];

    private $document;

    public function setDocument(SaleModel $sale)
    {
        $this->document = $sale;
        return $this;   
    }

    public function addDetail(SaleDetailModel $detail)
    {
        array_push($this->detailList,$detail);
    }

    public function addPayment(PaymentModel $payment)
    {
        array_push($this->paymentList,$payment);
    }

    public function build()
    {
        $this->saleTemplate = new SaleTemplate(
            $this->document,
            $this->detailList,
            $this->paymentList
        );

        $this->sale['Document']     = $this->saleTemplate->createDocumentTemplate();
        $this->sale['Detail']   = $this->saleTemplate->createDetailListTemplate();
        $this->sale['Payment']   = $this->saleTemplate->createPaymentListTemplate();

        return $this;
    }

    public function getSale()
    {
        return $this->sale;
    }
}
