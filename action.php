<?php
	$name = $_POST['ename'];
    $roll = $_POST['roll'];
	$course = $_POST['course'];
	$sem = $_POST['sem'];
    $phn = $_POST['phn'];

	$sql = "INSERT INTO `sinfo` VALUES('$roll', '$name','$course', '$sem', '$phn')";
    $conn= mysqli_connect("localhost", "root","","practical");

	if( $conn->query($sql)== TRUE)
	{
		header("location:display.php");
	}
	
	else
	{
		echo "ERROR: ". $conn->error;
	}

?>
