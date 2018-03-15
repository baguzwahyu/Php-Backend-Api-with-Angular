<?php
	$data = json_decode(file_get_contents("php://input"));

	include "db.php";

	$sql = "INSERT INTO employee (name, position, department, salary)
	VALUES ('$data->name', '$data->position', '$data->department', '$data->salary')";

	if($data->name){
		$qry = $conn->query($sql);
	}
	
	$conn->close();
?>
