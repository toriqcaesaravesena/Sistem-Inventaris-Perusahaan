<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$order_id = mysqli_real_escape_string($dbConn, $data->order_id);
	$encoded_By = mysqli_real_escape_string($dbConn, $data->encoded_By);
	$total_amount = mysqli_real_escape_string($dbConn, $data->total_amount);
	$discount_price = mysqli_real_escape_string($dbConn, $data->discount_price);
	$tendered = mysqli_real_escape_string($dbConn, $data->tendered);
	$change = mysqli_real_escape_string($dbConn, $data->change);
	
	$sql = "INSERT INTO  tbl_invoice (`order_id`, `encoded_By`, `total_amount`, `discount_price`, `tendered`, `change`) VALUES('".$order_id."', '".$encoded_By."', '".$total_amount."', '".$discount_price."',  '".$tendered."', '".$change."')";
	dbQuery($sql);
}

