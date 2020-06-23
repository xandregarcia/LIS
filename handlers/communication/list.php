<?php

$_POST = json_decode(file_get_contents('php://input'), true);

require_once '../../db.php';

session_start();

$con = new pdo_db();

$user = $con->getData("SELECT * FROM `tbl_ordinance` join `tbl_communication` on `tbl_ordinance`.ctrl_no = `tbl_communication`.ctrl_no");


header("Content-Type: application/json");
echo json_encode($communication);

?>