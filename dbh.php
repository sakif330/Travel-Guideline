<?php
$conn= mysqli_connect("localhost","root","","logintest2");
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}