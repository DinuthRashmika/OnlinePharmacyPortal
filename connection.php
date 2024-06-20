<?php
	$conn=mysqli_connect('localhost','root','','pharmacy');

	if($conn->connect_error)
	{
		echo "Error";
	}
	else{
		echo "connected successfully";
	}
?>