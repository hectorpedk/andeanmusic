<?php
include "router.php";

$controller = new Router();
$controller->getRequestedPage();
$controller->route();
?>
