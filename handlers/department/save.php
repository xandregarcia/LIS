<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("tbl_department");


if ($_POST['department']['id']) {
	
	$sp_profile = $con->updateObj($_POST['department'],'id');
	
} else {
	$sp_profile = $con->insertObj($_POST['department']);
	echo $con->insertId;

}

?>