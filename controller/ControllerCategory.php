<?php
require_once "model/CategoryDB.php";

class ControllerCategory
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
            case 'index':
                $categoryList = CategoryDB::getCategories();
                include "view/category/categoryList.php";
                break;
        }
    }
}