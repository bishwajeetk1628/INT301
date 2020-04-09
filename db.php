<?php
include"connection.php";
if(isset($_POST['username']))
{
$check="select * from signup where username='".$_POST['username']."'";
$query_check=mysqli_query($conn,$check);
$count=mysqli_num_rows($query_check);
if($count==0)
{
$check1="select * from signup where email='".$_POST['email']."'";
$query_check1=mysqli_query($conn,$check1);
$count1=mysqli_num_rows($query_check1);
if($count1==0)
{
date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d H:i:s');
if(mysqli_query($conn,"insert into signup(`username`,`email`,`password`,`policy`,`datetime`) values('".$_POST['username']."','".$_POST['email']."','".md5($_POST['password'])."','".$_POST['policy']."','$date')"))
{
echo'Registered Successfully';
}
else
{
echo'Failed To Register';
}
}
else
{
	echo'Email already exists';
}
}
else
{
	echo'Username already exists';
}
}
