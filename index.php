<?php
include 'connect.php';
include 'model/kp.model.php';
include 'view/kp/kp.view.php';
include 'controller/kp.controller.php';

$show = new KpController();
$show->show();

?>