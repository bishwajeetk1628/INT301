<?php
session_start();
if(isset($_SESSION['user'])&&$_SESSION['user']!='')
{
?>
<style type="text/css">
body
{
	font-family: sans-serif;
	margin: 0;
	background-color: #96cb4b;
}
div
{
	padding: 40px;
    color: #96cb4b;
    background-color: white;
    box-shadow: 0 2px 5px #333;
    width: 540px;
    margin-top: 10%;
}
a
{
	font-size: 18px;
	color: white;
	float: right;
	margin-right: 20px;
	font-weight: 600;
	letter-spacing: 0.8px;
	text-decoration: none;
	border: 3px dashed white;
	padding: 5px 15px 5px 15px;
	border-radius: 4px;
	margin-top: 20px;
}
</style>
<body>
	<a href="logout.php">Logout</a><br>
	<center><div><h1>WELCOME TO INT301</h1><h1 style="border:2px dashed #ddedf0;padding:10px;margin-top:25px;background-color:#fafcff">OPEN SOURCE TECHNOLOGIES</h1></div></center>

</body>
<?php
}
else
{
	echo"<script>location.href='login.php'</script>";
}
?>