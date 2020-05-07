<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("user_tbl");


if ($_POST['sp_profile']['id']) {
	
	$sp_profile = $con->updateObj($_POST['sp_profile'],'id');
	
} else {
	$sp_profile = $con->insertObj($_POST['sp_profile']);
	echo $con->insertId;

}

?>