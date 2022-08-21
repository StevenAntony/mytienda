<?php
namespace App\Core\Sale\Factory;

interface DetailListInterface
{
    public function add(\App\Core\Sale\Factory\Template\DetailTemplate $detailTemplate):void;
}