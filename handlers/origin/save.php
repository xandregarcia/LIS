<?php

header("Content-Type: application/json");

$_POST = json_decode(file_get_contents('php://input'), true);

include_once '../../db.php';

$con = new pdo_db("origin_tbl");


if ($_POST['origin']['id']) {
	
	$origin = $con->updateObj($_POST['origin'],'id');
	
} else {
	$origin = $con->insertObj($_POST['origin']);
	echo $con->insertId;

}

?>