<?php
	$data = json_decode(file_get_contents("php://input"));

	include "db.php";

	$sql = "UPDATE product SET name ='$data->name',  description ='$data->description'
	WHERE id = $data->id ";

	$qry = $conn->query($sql);

	if($data->name){
	}
	
	$conn->close();
?>
