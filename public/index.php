<?php
if (!session_id()) session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);
require_once "../app/init.php";

$app = new App;
