<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("tbl_category");


if ($_POST['category']['id']) {
	
	$sp_profile = $con->updateObj($_POST['category'],'id');
	
} else {
	$sp_profile = $con->insertObj($_POST['category']);
	echo $con->insertId;

}

?>