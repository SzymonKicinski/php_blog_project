<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "blog";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

?>