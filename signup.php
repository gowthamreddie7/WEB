<html>
<head>
<title>sign up</title>
<style type="text/css">
span{
font-size:22px;
color:white;
padding:9px;
}
input,textarea{
font-size:22px;
border-radius:9px;
padding:9px;
}
caption{
align:center;
font-size:33px;
color:red;
background-color:yellow;
}
</style>
</head>
<body bgcolor="blue">
<form method="post" action="">

<table width="640" border="5" bordercolor="white" align="center" bgcolor="green" cellpadding="12">
<caption>SIGN UP</caption> 
<tr>
<th><span>name</span></th>
<th><input type="text" placeholder="enter name" required autofocus name="uname"></th>
</tr>
<tr>
<th><span>Fathername </span></th>
<th><input type="text" placeholder="enter fathername" required name="fname"></th>
</tr>
<tr>
<th><span>mail_id</span></th>
<th><input type="email" placeholder="enter mail" required name="mail"></th>
</tr>
<tr>
<th><span>password</span></th>
<th><input type="password" placeholder="enter password" required name="upass"></th>
</tr>
<tr>
<td>
<span>Mode Of Stay</span>
</td>
<td> 
<span>Hostel:<span><input type="radio" value="Hostel" name="mode">&nbsp; &nbsp; &nbsp; &nbsp;<span>Days:</span><input type="radio" value="Days" name="mode"></td>
</tr>
<tr>
<th><span>phone_no</span></th>
<th><input type="text" placeholder="enter phone number" required name="phone" pattern="\d{10}"></th>
</tr>
<tr>
<th><span>Address</span></th>
<th>
<textarea rows="5" cols="22" name="address">
</textarea>
</th>
</tr>
<tr>
<th colspan="2"><input type="submit" value="submit" name="submit">
<input type="reset" value="clear"></th>
</tr>

</table>
</form>
<?php
$con=mysqli_connect("localhost","root","");

mysqli_query($con,"CREATE DATABASE student_details");
mysqli_select_db($con,"student_details");
$ct="CREATE TABLE personals(id INTEGER(4) PRIMARY KEY AUTO_INCREMENT,name VARCHAR(30),Fathername VARCHAR(30),mail_id VARCHAR(30),phone_number VARCHAR(14),address VARCHAR(135),password CHAR(30),Mode CHAR(30))";
mysqli_query($con,$ct);

if(isset($_POST['submit']))
{
if(mysqli_query($con,"INSERT INTO personals(id,name,Fathername,mail_id,phone_number,address,password,Mode) VALUES(',','$_POST[uname]','$_POST[fname]','$_POST[mail]','$_POST[phone]','$_POST[address]','$_POST[upass]','$_POST[mode]')"))
{
echo "<script>alert('data inserted successfully')</script>";
}
else
{
echo "<script>alert('not yet inserted')</script>";
}
}
else
{
echo "enter the details";
}
?>
</body>

</html>