<?php
session_start();

include "dbconnection.php";

$user=$_POST['u'];
$pass=$_POST['p'];

$query="select * from tbladmin where username='$user' and password='$pass'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0){
    // echo "login success";
    $row=mysqli_fetch_assoc($result);
    if(($row['username']==$user) && ($row['password']==$pass)){
        $_SESSION['id']=$user;
    header("location:admin.php");
}else{
    echo "invalid user/pass";
//header("location:login.php?n=1");
    header("location:login.php?m=");
}
}else{
    echo "invalid user/pass";
    header("location:login.php?m=1");
    }
?>