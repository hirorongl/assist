<?php

if (strpos ($_SERVER['PHP_SELF'], 'functions_facebook.inc') !== false) {
    die ('This file can not be used on its own.');
}

$_ASSIST_CONF['facebook_lib']=$_CONF['path'] . 'facebook/';;
	
if ($_ASSIST_CONF['facebook_lib']<>"") {
//	require_once $_ASSIST_CONF['facebook_lib'].'facebook.php';
}





?>
