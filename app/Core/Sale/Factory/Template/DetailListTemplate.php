<?php
namespace App\Core\Sale\Factory\Template;

use App\Core\Sale\Factory\DetailListInterface;

class DetailListTemplate implements DetailListInterface
{
    private $detailListTemplate = [];

    public function __construct(array $detailList) {
        foreach ($detailList as $key => $value) {
            $detailTemplate = new DetailTemplate(
                $value->getPresentationCode(),
                $value->getDescription(),
                $value->getUnit(),
                $value->getPrice(),
                $value->getCost(),
                $value->getAmount()
            );
            $this->add($detailTemplate);
        }
    }

    public function add(DetailTemplate $detailTemplate):void
    {
        array_push($this->detailListTemplate,$detailTemplate);
    }

    public function getDetailList():array
    {
        return $this->detailListTemplate;
    }
}
