<?php

$_POST = json_decode(file_get_contents('php://input'), true);

require_once '../../db.php';

session_start();

$con = new pdo_db();

$user = $con->getData("SELECT * FROM tbl_agency WHERE id = $_POST[id]");

// $group = $con->getData("SELECT group_id, group_name FROM groups WHERE group_id = ".$user[0]['groups']);
// $user[0]['groups'] = $group[0];

// $department = $con->getData("SELECT id, department FROM department WHERE id = ".$user[0]['users_department']);
// $user[0]['users_department'] = $department[0];

header("Content-Type: application/json");
echo json_encode($agency[0]);

?>