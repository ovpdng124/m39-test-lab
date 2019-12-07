<?php
require_once "controller/ControllerCategory.php";
require_once "controller/ControllerProduct.php";
require_once "controller/ControllerOrderItem.php";

$controller = new ControllerCategory();
$controller->invoke();
$controller = new ControllerProduct();
$controller->invoke();
$controller = new ControllerOrderItem();
$controller->invoke();