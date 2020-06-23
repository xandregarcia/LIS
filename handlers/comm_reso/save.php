<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("tbl_comm_meeting_reso");


if ($_POST['commReso']['id']) {
	
	$sp_profile = $con->updateObj($_POST['commReso'],'id');
	
} else {
	$sp_profile = $con->insertObj($_POST['commReso']);
	echo $con->insertId;

}

?>