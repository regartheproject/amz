<?php
define("ALLOW", true);
define('FCPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

session_start();

require 'CR51/Brain/helpers.php';
require 'CR51/Brain/core.php';

$core = new goCR51();
$core->runApp();
