<?php
$servername="localhost";
$username="root";
$password="";
$database="db";
$conn=new mysqli($servername,$username,$password,$database,3307);
if($conn->connect_error){
    die ("connection failed".$conn->connect_error);
}
else{
    echo"";
}
?>