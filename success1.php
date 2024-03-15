<?php
session_start();

include "dbconnection.php";

$fn=$_POST['fn'];
$ln=$_POST['ln'];
$e=$_POST['e'];
$m=$_POST['m'];
$a=$_POST['a'];
$user=$_POST['u'];
$pass=$_POST['p'];


$query="insert into tbluser(firstname,lastname,email,mobile,address,username,password) values('$fn','$ln','$e','$m','$a','$user','$pass')";
$result= mysqli_query($link,$query);
if($result){
    echo "<script> alert('record inserted');</script>";
    header("location:user.php");
}else{
    echo "error in insertion";
    // header("location:index.php");
}
?>