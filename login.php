<?php 
include"popup.php";
include"alert.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="icons/css/all.min.css">
<title>INT301</title>
<style type="text/css">
body
{
	margin: 0;
	font-family: sans-serif;
	background-color: #d5dbde;
}
#form
{
	border-radius: 4px;
	width: 380px;
	background-color: white;
	position: absolute;
	left: 0;
	right: 0;
	margin: auto;
	top: 10%;
	padding-top: 20px;
	padding-bottom: 20px;
}
h1,#small,#form div
{
	padding: 0px 30px 0px 30px;
}
#form div
{
	margin-bottom: 6px;
}
#small
{
	color: #bcc2c4;
	letter-spacing: 0.5px;
}
h1
{
	margin-bottom: 10px;
	font-size: 27px;
}
#hr
{
	border-top: 1px solid #dce1e3;
	width: auto;
	height: 1px;
	margin-top: 10px;
	margin-bottom: 0px;
}
i
{
	background-color: #ebebeb;
	padding: 11px 15px 11px 15px;
	vertical-align: top;
	display: inline-block;
	border-radius: 4px 0 0 4px;
	border-top:1px solid #cbcfd4;
	border-left:1px solid #cbcfd4;
	border-bottom:1px solid #cbcfd4;
	margin-right: -5px;
	color: #555;
}
input[type="text"],input[type="email"],input[type="password"]
{
margin-bottom: 25px;
width: 85%;
padding: 11px;
outline: none;
display: inline-block;
letter-spacing: 0.6px;
font-size: 14px;
font-weight: 500;
color: #333;
border-radius: 0 4px 4px 0;
border: 1px solid #cbcfd4;
}
::-webkit-input-placeholder {
  color: #bcc2c4;
}

:-ms-input-placeholder { 
  color:#bcc2c4;
}

::placeholder {
  color: #bcc2c4;
}
button
{
	width: 120px;
	text-align: center;
	font-size: 15px;
	font-weight: 600;
	background-color:#1ab394;
	border: none;
/*	box-shadow: 0 2px 3px #333;
*/	padding: 7px;
	color: white;
	margin-left: 32px;
	border-radius: 3px;
	margin-top: 12px;
}
input[type="checkbox"]
{
margin-left: 32px;
  height: 18px;
  border: 2px solid #333;
  vertical-align: middle;
  width: 18px;
  background-color: blue;
  
}
#small2
{
	color: #777;
	font-size: 14px;
}
#small2 small
{
	font-weight: 600;
}
a
{
float:right;color:silver;margin-right:35px;
}
a:hover
{
	color: #1ab394;
}
</style>
</head>
<body>
	<div id="form">
		<h1>Sign In</h1>
		<small id="small">Please fill in this form to Sign In your account!</small>
		<div id="hr"></div><br>
		<form><br>
		<div><i class="fa fa-user"></i>
		  <input type="text" placeholder="Username" minlength="3" maxlength="20" name="username" required>
	    </div>
	   
	    <div><i class="fa fa-lock"></i>
		  <input type="password" onkeyup="check()" id="p1" placeholder="Password" minlength="6" maxlength="15" name="password" required>
		</div>
		
		<div id="warning" style="padding:0;margin:5px 0 20px 30px;display:none;background-color:#f2dede;border:1px solid #ebccd1;padding:15px;color:#a94442;border-radius:5px;width:75%">
			<label id="label1">Password doesn't match!</label><i onclick="$('#warning').fadeOut('slow')" style="color:#ed817e;cursor:pointer;padding:0;margin:0;font-size:17px;background-color:transparent;float:right;border:none" class="fa fa-times"></i>
		</div>
		<div id="warning2" style="padding:0;margin:5px 0 20px 30px;background-color:#dff0d8;display:none;border:1px solid #d6e9c6;padding:15px;color:#3c763d;border-radius:5px;width:75%">
			<label id="label2"></label><i onclick="$('#warning2').fadeOut('slow')" style="color:#a0dea1;cursor:pointer;padding:0;margin:0;font-size:17px;background-color:transparent;float:right;border:none" class="fa fa-times"></i>
		</div>		
		<button name="signin">Sign In</button>
		<br><br>
		<a href="./">create account!</a>
	</form>
	</div>
		<!-- Bishwajeet(Bishwajit.com)/- Ajax function to Login and render server response -->
	<script>
      $(function () {

        $('form').on('submit', function (e) {
          e.preventDefault();
          $('.loader').show();
          $.ajax({
            type: 'post',
            url: 'login-db.php',
            data: $('form').serialize(),
            success: function (data) {
            $('.loader').hide();
            if(data!='Logged In Successfully')
            {
              $('#warning').show();
              $('#label1').html(data);
            }
            else
            {
           	$('#warning2').show();
           	$('#label2').html(data);
            setTimeout(function(){
            $('#warning2').fadeOut('slow');
            },2000);
             setTimeout(function(){
            location.href='dashboard.php';
            },2500);
            }
            }
         });
        });

      });
    </script>
</body>
</html>