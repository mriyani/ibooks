<?php  
	$conn = mysqli_connect('localhost', 'root', '', 'ibooks');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error());
	}
?>