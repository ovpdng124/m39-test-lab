<?php
require_once "model/ProductDB.php";

class ControllerProduct
{
    public function invoke()
    {
        $action = filter_input(INPUT_POST, 'action');
        if (empty($action)) {
            $action = filter_input(INPUT_GET, 'action');
            if (empty($action)) {
                $action = 'index';
            }
        }
        switch ($action) {
            case 'detailProductList':
                $categoryID = filter_input(1,'categoryID');
                $detailProductList = ProductDB::getDetailProductList($categoryID);
                include "view/product/detailProductList.php";
                break;
        }
    }
}