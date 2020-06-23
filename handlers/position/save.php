<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("position_tbl");


if ($_POST['position']['id']) {
	
	$position = $con->updateObj($_POST['position'],'id');
	
} else {
	$position = $con->insertObj($_POST['position']);
	echo $con->insertId;

}

?>