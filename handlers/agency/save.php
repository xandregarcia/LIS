<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("tbl_agency");


if ($_POST['agency']['agency_id']) {
	
	$sp_profile = $con->updateObj($_POST['agency'],'agency_id');
	
} else {
	$sp_profile = $con->insertObj($_POST['agency']);
	echo $con->insertId;

}

?>