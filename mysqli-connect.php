<?php
session_start();
$conn=mysqli_connect("localhost","root","","helth-com");
if($conn==false)
{
	echo "couldnot connect";
}
?>