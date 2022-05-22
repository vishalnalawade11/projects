<?php
session_start();
if (isset($_POST['action'])) {
	if ($_POST['action'] == "delete") {
		foreach ($_SESSION['mycart'] as $key => $value) {
			
			if ($value['id'] == $_POST['id']) {
				unset($_SESSION['mycart'][$key]);
			}
		}
	}
    if($_POST['action'] =="clearAll")
    {
        unset($_SESSION['mycart']);      
    }
}
?>