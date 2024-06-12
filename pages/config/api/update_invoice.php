<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

    $order_id = mysqli_real_escape_string($dbConn, $data->order_id);
	$encoded_By = mysqli_real_escape_string($dbConn, $data->encoded_By);
	$total_amount = mysqli_real_escape_string($dbConn, $data->total_amount);
	$discount_price = mysqli_real_escape_string($dbConn, $data->discount_price);
	$tendered = mysqli_real_escape_string($dbConn, $data->tendered);
	$change = mysqli_real_escape_string($dbConn, $data->change);
	
	$sql = "UPDATE `tbl_invoice` SET order_id = '" . $order_id . "', encoded_By = '" . $encoded_By . "', total_amount = '" . $total_amount . "', discount_price = '" . $discount_price . "', tendered = '" . $tendered . "', change = '" . $change . "' WHERE invoice_id = " . $data->invoice_id;
	dbQuery($sql);
}

