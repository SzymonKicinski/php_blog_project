<?php
require_once('bootstrap/config.php');
require_once('bootstrap/database.php');
require_once('bootstrap/session.php');


$database = new Database($host, $user, $password, $name);
$session = new Session();
$idLogin = 0;