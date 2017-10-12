<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT',dirname(__FILE__));
require_once (ROOT.'/core/Router.php');

$Rouner = new Router();
$Rouner->run();