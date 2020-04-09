<?php
include"connection.php";
if(isset($_POST['username']))
{
$check="select * from signup where username='".$_POST['username']."' and password='".md5($_POST['password'])."'";
$query_check=mysqli_query($conn,$check);
$count=mysqli_num_rows($query_check);
if($count==1)
{
$row=mysqli_fetch_assoc($query_check);
session_start();
$_SESSION['user']=$row['id'];
echo"Logged In Successfully";
}
else
{
	echo'Invalid Credentials!';
}
}
else
{
echo"<script>alert('Login first')</script>";
}
?>
