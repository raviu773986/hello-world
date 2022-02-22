<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title></head>
    <style>
    .err
	{
	   color: red;
	   font-size: 12px;
	}

	
</style>
<script>
function f1()
{
	var ok=true;
	
	if(document.getElementById("name").value=="")
		{
			document.getElementById("err_name").style.display="block";
			ok=false;	
		}
	else
		{
			document.getElementById("err_name").style.display="none";
			ok=true;
		}
	if(document.getElementById("email").value=="")
		{
		//alert("T")
			document.getElementById("err_email").style.display="block";
			ok=false;	
		}
	else
		{
			document.getElementById("err_email").style.display="none";
			ok=true;
		}
   if(document.getElementById("mobl").value=="")
		{
			document.getElementById("err_mobile").style.display="block";
			ok=false;	
		}
	else
	{
		document.getElementById("err_mobile").style.display="none";
		ok=true;
	}
    if(document.getElementById("pass").value=="")
		{
			document.getElementById("err_pass").style.display="block";
			ok=false;	
		}
	else
	{
		document.getElementById("err_pass").style.display="none";
		ok=true;
	}
	if(ok==false)
		{
			return false;
		}
}
</script>
<body style="background-color: #EAEAEA;">
<?php
include('header.php');
?>
<table border="3px" align="center" width="500px" class="mt-5" >
<h2 align="center">Student Registration </h2> 
    <form method="post"  action="inserts.php">
    <tr> 
        <td> Student Name: <input type="text" id="name" name="nm" placeholder="Enter your name" minlength="3" maxlength="20" required />
        <span id="err_name" class="err" style="display: none;">Enter your name</span> </td>
    <tr>
	<tr>
        <td>Class: <input type="text"  id="cls" name="class"  required /> 
        <span id="err_cls" class="err" style="display: none;">Enter your class</span></td> 
    </tr>
    <tr>
        <td>Mobile: <input type="text"  id="mobl" name="mob" pattern="[9876][0-9]{9}" required /> 
        <span id="err_mobile" class="err" style="display: none;">Enter your Mobile</span></td> 
    </tr>
    <tr>
        <td> Email:<input type="email"  id="email" name="eml" pattern="[a-z 0-9]+@[a-z  0-9]+.[a-z]{2,4}"/>
        <span id="err_email" class="err" style="display: none;">Enter your email</span></td>
    </tr>
    <tr>
        <td> password: <input type="password" id="pass" name="pwd"/>
        <span id="err_pass" class="err" style="display: none;">Enter your Password</span> </td>
    </tr>
    <tr>
        <td> <input type="submit" name="submit"/> </td>
    </tr>
    </form>
</table>
<?php
include('footer.php');
?>
</body>
</html>

