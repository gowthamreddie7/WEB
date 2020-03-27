<html>
<head>
<title>faculty</title>
<style type="text/css">
label{
font-size:24px;
color:white;
text-align:center;
}
input{
font-size:22px;
padding:9px;
text-align:center;
border-radius:9px;
}
#a{
text-align:center;
}
</style>
</head>
<body>
<form method="post" action="">
<table width="600" border="2" bgcolor="olive" align="center" cellpadding="12">
<caption>FACULTY DETAILS</caption>
<tr>
<td><label>Section</label></td>
<td><input type="text" placeholder="enter section" required autofocus name="section"</td>
</tr>
<tr>
<td><label>Maths faculty</label></td>
<td><input type="text" placeholder="enter maths faculty" required name="m_f"</td>
</tr>
<tr>
<td><label>physics faculty</label></td>
<td><input type="text" placeholder="enter phy faculty" required name="p_f"</td>
</tr>
<tr>
<td><label>chemistry faculty</label></td>
<td><input type="text" placeholder="enter chem faculty" required name="c_f"</td>
</tr>
<tr>
<td colspan="2" id="a">
<input type="submit" value="submit" name="submit">
<input type="reset" value="clear">
</td>	
</tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","root","","student_details");
mysqli_query($con,"CREATE TABLE faculty(S1 VARCHAR(30),S2 VARCHAR(30),S3 VARCHAR(30),S4 VARCHAR(30),S5 VARCHAR(30),S6 VARCHAR(30))");
mysqli_query($con,"ALTER TABLE faculty DROP id");
if(isset($_POST['submit']))
{
if(mysqli_query($con,"INSERT INTO faculty('$_POST[section]') VALUES('$_POST[m_f]'),('$_POST[p_f]'),('$_POST[c_f]')"))
{
echo "<script>alert('data inserted');</script>";
}
else
{
echo "<script>alert('not yet inserted');</script>";
}
}
?>
</body>
</html>