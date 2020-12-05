<?php
if (file_exists("data.php")) {
	include 'data.php';
}else{
	die("Error : Something went wrong");
}
if (file_exists("config.php")) {
	include 'config.php';
}else{
	die("Error : Something went wrong");
}
if ($load['env'] == 'developement') {
function HandleError($errno, $errstr, $errfile, $errline) {
    echo "<b>Error:</b> Backtrace : [$errno] $errstr<br>";
    echo " Error on line no. $errline in File :  $errfile<br>";
}
set_error_handler("HandleError");
}
function getControllerStatus($controllerarray){
	$controller = $controllerarray;
	if (isset($controller['name'])) {
		$status = 200 ;
	}else{
		$status = 404 ;
	}
	return $status;
}
$ht = "RewriteEngine On\nRewriteRule ^([".$allowed_char."]+)$ index.php?page=$1
";
if (file_exists(".htaccess")) {
	$gethtaccess = fopen(".htaccess", "r") or die("WENT WRONG");
	if ($gethtaccess == $ht) {
	}else{
		$htaccess = fopen(".htaccess", "w") or die("htaccess Error!");
		fwrite($htaccess, $ht);
		fclose($htaccess);
	}
}else{
$htaccess = fopen(".htaccess", "w") or die("htaccess Error!");
fwrite($htaccess, $ht);
fclose($htaccess);
}
function loadfile($file,$ext){
	#file
	if (file_exists("views/".$file.".".$ext."")) {
		include "views/".$file.".".$ext."";
	}else{
		echo "<script>alert('Error View File ".$file."".$ext."');</script>";
	}
}
function redirect($url){
	echo '<script> document.location.href="'.$url.'"; </script>';
}
//Security
if ($_GET['page'] == "core") {
	//header("Location: ../403");
	die(include 'system/403.php');
}elseif ($_GET['page'] == "core/") {
	die(include 'system/403.php');
}
if ($_GET['page'] == "system") {
	//header("Location: ../403");
	die(include 'system/403.php');
}elseif ($_GET['page'] == "system/") {
	die(include 'system/403.php');
}
if ($_GET['page'] == "views") {
	//header("Location: ../403");
	die(include 'system/403.php');
}elseif ($_GET['page'] == "views/") {
	die(include 'system/403.php');
}
