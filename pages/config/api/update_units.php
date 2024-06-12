<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

	$name = mysqli_real_escape_string($dbConn, $data->name);
	$description = mysqli_real_escape_string($dbConn, $data->description);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);
	
	$sql = "UPDATE tbl_units SET name = '" . $name . "', description = '" . $description . "', encoded_by = '" . $encoded_by . "' WHERE units_id = " . $data->units_id;
	dbQuery($sql);
}

