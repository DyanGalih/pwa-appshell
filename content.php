<?php
	header('Content-Type: application/json');
	
	$content = array();
	$content["data"]["0"]["title"] = "Column 1";
	$content["data"]["0"]["content_1"] = "Lorem ipsum dolor.. 1 ";
	$content["data"]["0"]["content_2"] = "Ut enim ad.. 1";
	$content["data"]["1"]["title"] = "Column 2";
	$content["data"]["1"]["content_1"] = "Lorem ipsum dolor.. 2 ";
	$content["data"]["1"]["content_2"] = "Ut enim ad.. 2";
	$content["data"]["2"]["title"] = "Column 3";
	$content["data"]["2"]["content_1"] = "Lorem ipsum dolor.. 3 ";
	$content["data"]["2"]["content_2"] = "Ut enim ad.. 3";

	echo json_encode($content);
?>