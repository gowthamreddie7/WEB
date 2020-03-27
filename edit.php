<html>
<head>
<title>edit</title>
</head>
<body bgcolor="teal">
<font size="6" color="white">
<?php
$id=$_GET['id'];

$con=mysqli_connect("localhost","root","","student_details");

$res=mysqli_query($con,"SELECT * FROM marks WHERE id='$id'");

$data=mysqli_fetch_assoc($res);

$ID=$data['id'];
$maths=$data['maths'];
$phy=$data['phy'];
$chem=$data['chem'];
if(isset($_POST['submit']))
{
$res=mysqli_query($con,"UPDATE marks SET maths='$_POST[maths]',phy='$_POST[phy]',chem='$_POST[chem]' WHERE id='$id'");
header("Location:marks_crud.php");
}

?>
</font>
<form method="post" action="">
<table width="640" border="5" bordercolor="white" align="center" bgcolor="green" cellpadding="12">
<tr>
<td>Id</td>
<td>
<input type="text" placeholder="Enter id" autofocus required name="id" value="<?php if(isset($ID))  echo $ID  ?>">
</td>
</tr>
<tr>
<td>Maths</td>
<td>
<input type="text" placeholder="Enter maths marks" required name="maths" value="<?php if(isset($maths))  echo $maths  ?>">
</td>
</tr>
<tr>
<td>Physics</td>
<td>
<input type="text" placeholder="Enter phy marks" required name="phy" value="<?php if(isset($phy)) echo $phy ?>">
</td>
</tr>
<tr>
<td>Chemistry</td>
<td>
<input type="text" placeholder="Enter chem marks" required name="chem" value="<?php if(isset($chem)) echo $chem ?>">
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="submit" name="submit">
<input type="reset" value="clr">
</td>
</tr>
</table>
</form>
</body>
</html>