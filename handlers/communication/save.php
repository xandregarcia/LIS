<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("tbl_communication");


if ($_POST['communication']['id']) {
	
	$sp_profile = $con->updateObj($_POST['communication'],'id');
	
} else {
	$sp_profile = $con->insertObj($_POST['communication']);
	echo $con->insertId;

}

?>