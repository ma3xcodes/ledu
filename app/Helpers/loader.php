<?php
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
$helpers = glob(__DIR__ . DS . '*.php');
foreach ($helpers as $helper){
    require_once $helper;
}
