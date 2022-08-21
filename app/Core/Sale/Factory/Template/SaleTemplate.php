<?php
namespace App\Core\Sale\Factory\Template;

use App\Core\Models\SaleModel;
use App\Core\Sale\Factory\SaleInterface;
use App\Core\Sale\Factory\DocumentInterface;
use App\Core\Sale\Factory\PaymentListInterface;
use App\Core\Sale\Factory\Template\DocumentTemplate;
use App\Core\Sale\Factory\Template\DetailListTemplate;

class SaleTemplate implements SaleInterface
{
    private $document;
    private $detailList;
    private $paymentList;

    public function __construct(
        SaleModel $document,
        array $detailList,
        array $paymentList
    ) 
    {
        $this->document     = $document;
        $this->detailList   = $detailList;
        $this->paymentList  = $paymentList;
    }


    public function createDocumentTemplate(): DocumentInterface
    {
        return new DocumentTemplate(
            $this->document->getDocumentType(),
            $this->document->getSerie(),
            $this->document->getCorrelative(),
            $this->document->getIssue(),
            $this->document->getPaymentType(),
            $this->document->getAdditional(),
            $this->document->getPartialProduct(),
            $this->document->getTypeSale(),
            $this->document->getTableCode(),
            $this->document->getBoxCode(),
            $this->document->getUserCode(),
            $this->document->getIgv(),
            $this->document->getClient()
        );
    }

    public function createDetailListTemplate(): DetailListTemplate
    {
        return new DetailListTemplate($this->detailList);
    }

    public function createPaymentListTemplate(): PaymentListInterface
    {
        return new PaymentListTemplate($this->paymentList);
    }
}