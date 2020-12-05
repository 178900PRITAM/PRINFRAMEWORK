<?php
include 'core/prinCORE.php';
foreach ($controller as $co) {
	if (isset($_GET['page'])) {
		if ($co['name'] == $_GET['page']) {
			if (file_exists('views/'.$co['views'].'')) {
				include 'views/'.$co['views'].'';
			}else{
			if ($not_found == false) {
			$error = include 'system/fileerror.php';
			$error = str_replace("{{ page }}", $_GET['page'], $error);
			return $error;
			}else{
			$error = include 'views/error/404.php';
			$error = str_replace("{{ page }}", $_GET['page'], $error);
			return $error;
			}
			}
		}else{
			if ($not_found == false) {
			include 'system/404.php';
			}else{
			include 'views/error/404.php';
			}
		}
		die();
	}else{
		header("Location: $default");
	}
}