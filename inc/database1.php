<?php
$conn= mysqli_connect("localhost","root","","trip");
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}