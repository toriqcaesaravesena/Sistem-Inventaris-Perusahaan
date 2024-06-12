<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$name = mysqli_real_escape_string($dbConn, $data->name);
	$description = mysqli_real_escape_string($dbConn, $data->description);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);
	
	$sql = "INSERT INTO  tbl_units (`name`, `description`, `encoded_by`) VALUES('".$name."', '".$description."', '".$encoded_by."')";
	dbQuery($sql);
}

