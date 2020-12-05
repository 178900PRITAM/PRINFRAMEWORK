<?php
include 'core/s_mvc.php';
if (isset($_GET['model'])) {
foreach ($model as $model) {
	if ($model['name'] == $_GET['model']) {
		if (function_exists($model['function'])) {
			$model['function']();
			}else{
			echo "Sometthing went wronf : #";
			}
			die();
	}
}
}else{
	echo "MODELERROR : ##";
}
