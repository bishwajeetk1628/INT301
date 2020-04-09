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
	margin-top: 8px;
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
margin-bottom: 15px;
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
</style>
</head>
<body>
	<div id="form">
		<h1>Sign Up</h1>
		<small id="small">Please fill in this form to create an account!</small>
		<div id="hr"></div><br>
		<form>
		<div style="margin-top:-6px"><i class="fa fa-user"></i>
		  <input type="text" placeholder="Username" minlength="3" maxlength="20" name="username" required>
	    </div>
	    <div><i class="fa fa-paper-plane"></i>
		  <input type="email" placeholder="Email Address" minlength="8" maxlength="40" name="email" required>
	    </div>
	    <div><i class="fa fa-lock"></i>
		  <input type="password" onkeyup="check()" id="p1" placeholder="Password" minlength="6" maxlength="15" name="password" required>
		</div>
		<div><i class="fa fa-lock"></i>
		  <input type="password" onkeyup="check()" id="p2" placeholder="Confirm Password" minlength="6" maxlength="15"  name="confirm_password" required>
		</div>
		<div id="warning" style="padding:0;margin:5px 0 20px 30px;display:none;background-color:#f2dede;border:1px solid #ebccd1;padding:15px;color:#a94442;border-radius:5px;width:75%">
			<label id="label1">Password doesn't match!</label><i onclick="$('#warning').fadeOut('slow')" style="color:#ed817e;cursor:pointer;padding:0;margin:0;font-size:17px;background-color:transparent;float:right;border:none" class="fa fa-times"></i>
		</div>
		<div id="warning2" style="padding:0;margin:5px 0 20px 30px;background-color:#dff0d8;display:none;border:1px solid #d6e9c6;padding:15px;color:#3c763d;border-radius:5px;width:75%">
			<label id="label2"></label><i onclick="$('#warning2').fadeOut('slow')" style="color:#a0dea1;cursor:pointer;padding:0;margin:0;font-size:17px;background-color:transparent;float:right;border:none" class="fa fa-times"></i>
		</div>
		<div style="padding:0;margin:12px 0 6px 0">
		<input type="checkbox" name="policy" value="Accepted" required>
		<small id="small2">I accept the 
			<small style="color:#1ab394">Terms of Use</small>
			 & 
			 <small style="color:#1ab394">Privacy Policy</small>
			</small>
		</div>
		
		<button name="signup">Sign Up</button>
	</form>
	</div>
	<!-- Bishwajeet(Bishwajit.com)/-Javascript to validate password -->
	<script type="text/javascript">
     function check()
     {
     	var p1=document.getElementById('p1').value;
     	var p2=document.getElementById('p2').value;
     	var l1=p1.trim().length;
     	var l2=p2.trim().length;
     if(l2>=l1)
     {
     	if(p1!=p2)
     	{
     		if(p1.trim()!=''&&p2.trim()!='')
     		{
     		  $('#warning').show();
     	    }
         
     	}
     	else
     	{
         $('#warning').hide();
     	}
     }
     	if(p1.trim()==''||p2.trim()=='')
     		{
     		  $('#warning').hide();
     	    }
     }
	</script>
	
	<!-- Bishwajeet(Bishwajit.com)/- Ajax function to submit form and render server response -->
	<script>
      $(function () {

        $('form').on('submit', function (e) {
          e.preventDefault();
          var p1=document.getElementById('p1').value;
     	var p2=document.getElementById('p2').value;
     	var l1=p1.trim().length;
     	var l2=p2.trim().length;
     if(l2>=l1)
     {
     	if(p1!=p2)
     	{
     		if(p1.trim()!=''&&p2.trim()!='')
     		{
     		  $('#warning').show();
     	    }
         
     	}
     	else
     	{
          $('.loader').show();
          $.ajax({
            type: 'post',
            url: 'db.php',
            data: $('form').serialize(),
            success: function (data) {
            $('.loader').hide();
            if(data=='Username already exists')
            {
              $('#warning2').hide();
              $('#warning').show();
              $('#label1').html(data);
            }
            else if(data=='Email already exists')
            {
              $('#warning').show();
              $('#label1').html(data);
            }
            else
            {
            $('#warning').hide();
           	$('#warning2').show();
           	$('#label2').html(data);
            setTimeout(function(){
            $('#warning2').fadeOut('slow');
            },2000);
             setTimeout(function(){
            location.href='login.php';
            },3000);
            }
            }
          });

     	}
     }
         
        });

      });
    </script>
</body>
</html>