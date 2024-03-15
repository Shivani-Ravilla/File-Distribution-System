<?php
session_start();

include "dbconnection.php";

$user=$_POST['u'];
$pass=$_POST['p'];

$query="select * from tbluser where username='$user'and password='$pass' and  allowed='Y'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0){
    // echo "login success";
    $row=mysqli_fetch_assoc($result);
    if(($row['username']==$user) && ($row['password']==$pass)){
        $_SESSION['id']=$user;
    header("location:upage.php");
}else{
echo "you are not allowed";
//header("location:login.php?n=1");
header("location:ulogin.php?m=");
}
}else{
     echo "You are not allowed";
    header("location:ulogin.php?m=1");
    }
?>