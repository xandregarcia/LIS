<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("tbl_comm_meeting_ordi");


if ($_POST['commOrd']['id']) {
	
	$sp_profile = $con->updateObj($_POST['commOrd'],'id');
	
} else {
	$sp_profile = $con->insertObj($_POST['commOrd']);
	echo $con->insertId;

}

?>