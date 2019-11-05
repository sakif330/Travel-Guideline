<?php
$conn= mysqli_connect("localhost","root","","trip");

if($conn){
	echo "i am working";
}
elseif(!$conn){
    die("connection failed: ".mysqli_connect_error());
}