<?php

$_POST = json_decode(file_get_contents('php://input'), true);

require_once '../../db.php';

session_start();

$con = new pdo_db();

$user = $con->getData("SELECT * FROM tbl_comm_meeting_reso");


header("Content-Type: application/json");
echo json_encode($user);

?>