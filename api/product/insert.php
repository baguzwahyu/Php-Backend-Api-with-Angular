<?php
	$data = json_decode(file_get_contents("php://input"));

	include "db.php";

	$sql = "INSERT INTO product (name, description)
	VALUES ('$data->name', '$data->description')";

	if($data->name){
		$qry = $conn->query($sql);
	}
	
	$conn->close();
?>
