<?php
$user='root';
$pass='';
$db='testdb';
$db=new mysqli('localhost',$user,$pass,$db) or die(" unable to connect");
echo'working';

?>