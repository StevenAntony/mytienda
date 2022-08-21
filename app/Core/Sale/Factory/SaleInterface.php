<?php
namespace App\Core\Sale\Factory;

use App\Core\Sale\Factory\Template\DetailListTemplate;

interface SaleInterface
{
    public function createDocumentTemplate(): DocumentInterface;

    public function createDetailListTemplate(): DetailListTemplate;
    
    public function createPaymentListTemplate(): PaymentListInterface;

    // public function generateSale(): TemplateRenderer;
}
