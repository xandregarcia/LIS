<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("tbl_committee");


if ($_POST['committee']['id']) {
	
	$sp_profile = $con->updateObj($_POST['committee'],'id');
	
} else {
	$sp_profile = $con->insertObj($_POST['committee']);
	echo $con->insertId;

}

?>