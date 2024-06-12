<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$item_code = mysqli_real_escape_string($dbConn, $data->item_code);
	$full_name = mysqli_real_escape_string($dbConn, $data->full_name);
	$varient = mysqli_real_escape_string($dbConn, $data->varient);
	$unit_value = mysqli_real_escape_string($dbConn, $data->unit_value);
	$units_id = mysqli_real_escape_string($dbConn, $data->units_id);
	$category_id = mysqli_real_escape_string($dbConn, $data->category_id);
	$net_price = mysqli_real_escape_string($dbConn, $data->net_price);
	$production_cost = mysqli_real_escape_string($dbConn, $data->production_cost);
	$markup_percent = mysqli_real_escape_string($dbConn, $data->markup_percent);
	$markup_price = mysqli_real_escape_string($dbConn, $data->markup_price);
	$discount = mysqli_real_escape_string($dbConn, $data->discount);
	$discount_price = mysqli_real_escape_string($dbConn, $data->discount_price);
	$sales_price = mysqli_real_escape_string($dbConn, $data->sales_price);
	$reorder_level = mysqli_real_escape_string($dbConn, $data->reorder_level);
	$stock_quantity = mysqli_real_escape_string($dbConn, $data->stock_quantity);
	$expired_date = mysqli_real_escape_string($dbConn, $data->expired_date);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);
	
	$sql = "INSERT INTO  tbl_product (`item_code`, `full_name`, `varient`,  `unit_value`, `units_id`, `category_id`, `net_price`, `production_cost`, `markup_percent`, `markup_price`, `discount`, `discount_price`, `sales_price`, `reorder_level`, `stock_quantity`, `expired_date`, `encoded_by`) 
	        VALUES('".$item_code."', '".$full_name."', '".$varient."',  '".$unit_value."', '".$units_id."', '".$category_id."', '".$net_price."', '".$production_cost."', '".$markup_percent."', '".$markup_price."', '".$discount."', '".$discount_price."', '".$sales_price."', '".$reorder_level."', '".$stock_quantity."', '".$expired_date."', '".$encoded_by."')";
	dbQuery($sql);
}

