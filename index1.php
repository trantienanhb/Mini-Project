<?php

$controler=isset($_GET['controler'])? $_GET['controler'].'Controller':'UserController';
$action= isset($_GET['action'])? $_GET['action']:'getUser';
require_once ("Controllers/UserController.php");
$usercontroler= new $controler();
$usercontroler->getUser();