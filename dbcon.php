<?php

$servername="localhost";
$username="root";
$password="";
$DATABASE="crud_operations";

$connection=mysqli_connect($servername,$username,$password,$DATABASE);
if(!$connection){
    die("connection failed");
}


?>