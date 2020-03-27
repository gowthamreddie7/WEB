<html>
<head>
<title>marks</title>
<style type="text/css">
span{
padding:12px;
font-size:22px;
color:white;
}
input{
font-size:22px;
border-radius:9px;
text-align:center;
padding:13px;
}
</style>
</head>
<body bgcolor="olive">
<form method="post" action="">
<table width="580" border="5" bordercolor="white" align="center" cellpadding="12" bgcolor="green">
<tr>
<td><span>ID</span></td>
<td>
<input type="text" placeholder="enter ID" autofocus required name="id">
</td>
</tr>
<tr>
<td><span>PHY</span></td>
<td><input type="text" placeholder="enter phy marks" required name="phy"></td>
</tr>
<tr>
<td><span>MATHS</span></td>
<td><input type="text" placeholder="enter maths marks" required name="maths"></td>
</tr>
<tr>
<td><span>CHEM</span></td>
<td><input type="text" placeholder="enter chem marks" required name="chem"></td>
<tr>
<td colspan="2" align="center">
<input type="submit" value="submit" name="submit">
<input type="reset" value="Clear">
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"student_details");
$ct="CREATE TABLE marks(id INTEGER(4),phy INTEGER(5),maths INTEGER(5),chem INTEGER(5),FOREIGN KEY(id) REFERENCES personals(id) ON DELETE CASCADE)";
mysqli_query($con,$ct);
if(mysqli_query($con,"INSERT INTO marks VALUES('$_POST[id]','$_POST[phy]','$_POST[maths]','$_POST[chem]')"))
{
echo "<script>alert('data inserted successfully')</script>";
header("Location:marks_crud.php");
}
else
{
echo "<script>alert('not yet inserted')</script>";
}
}
?>
</body>
</html>