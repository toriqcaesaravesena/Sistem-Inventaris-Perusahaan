<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$company_name = mysqli_real_escape_string($dbConn, $data->company_name);
	
	$sql = "INSERT INTO  tbl_company(`company_name`) VALUES('" . $company_name . "')";
	dbQuery($sql);
}

