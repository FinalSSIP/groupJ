<?php 
session_start();
include 'config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$query=mysql_query("select * from admin where uname='$uname' and pass='$pass'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:dashboard.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?> 