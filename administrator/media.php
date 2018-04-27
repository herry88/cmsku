<?php 
include "../config/connection.php";

function anti_injection($data){
	$filter = stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
	return $filter;
}

$username = anti_injection($_POST['username']);
$password = anti_injection(md5($_POST['password']));

$injeksi_username = anti_injection