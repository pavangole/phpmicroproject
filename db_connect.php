<?php
$server= "localhost:3306";
$username="root";
$password="";
$database="website";
$con = mysqli_connect($server,$username,$password,$database);
if(!$con){
 die("Error" .mysqli_connect_error());
}
?>