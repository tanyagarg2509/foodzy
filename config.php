<?php
$servername="localhost";
$username="root";
$password="";
$dbname="foodzy";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed";
}