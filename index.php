<?php
date_default_timezone_set('PRC');
define("WEBROOT",dirname(__FILE__));
require_once WEBROOT.'/application/controller/PageController.php';
$controller="index";
if(!is_null(@$_GET["controller"])){
	$controller=@$_GET["controller"];
	$ALLontroller=new PageController();
	
	$controller=$controller."Action";
	$ALLontroller->$controller();
}


?>