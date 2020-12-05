<?php
$default = "welcome";
$not_found = false;
$allowed_char = "a-zA-Z0-9-/-;";

$controller[] = array('name' => 'welcome' , 'views' => 'welcome.php');
//MODEL
$model[] = array('name' => 'sim' , 'function' => "fun");

//CUSTOM-FUNCTIONS
function fun(){
	echo 112;
}