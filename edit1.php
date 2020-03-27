<html>
<head>
<title>edit</title>
</head>
<body bgcolor="teal">
<font size="6" color="white">
<?php
$id=$_GET['id'];

$con=mysqli_connect("localhost","root","","student_details");

$res=mysqli_query($con,"SELECT id,name,Fathername,mail_id,phone_number,address,Mode FROM personals  WHERE id='$id'");

$data=mysqli_fetch_assoc($res);

$ID=$data['id'];
$name=$data['name'];
$Fathername=$data['Fathername'];
$mail_id=$data['mail_id'];
$phone_number=$data['phone_number'];
$address=$data['address'];
if(isset($_POST['submit']))
{
$res=mysqli_query($con,"UPDATE personals SET name='$_POST[uname]',Fathername='$_POST[father]',mail_id='$_POST[mail_id]',phone_number='$_POST[phone]',address='$_POST[address]',Mode='$_POST[mode]' WHERE id='$id'");
header("Location:personals_crud.php");
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
<td>Name</td>
<td>
<input type="text" placeholder="Enter name" required name="uname" value="<?php if(isset($name))  echo $name  ?>">
</td>
</tr>
<tr>
<td>Father Name</td>
<td>
<input type="text" placeholder="Enter FatherName" required name="father" value="<?php if(isset($Fathername)) echo $Fathername ?>">
</td>
</tr>
<tr>
<td>Mail-id</td>
<td>
<input type="text" placeholder="Enter mail id" required name="mail_id" value="<?php if(isset($mail_id)) echo $mail_id ?>">
</td>
</tr>
<tr>
<td>Phone number</td>
<td>
<input type="text" placeholder="Enter phone number" required name="phone" value="<?php if(isset($phone_number)) echo $phone_number ?>">
</td>
</tr>
<tr>
<td>
Mode of Stay
</td>
<td>Hostel<input type="radio" name="mode" value="Hostel">&nbsp; &nbsp; Days <input type="radio" name="mode" value="days"></td>
</tr>
<tr>
<td>Address</td>
<td>
<textarea rows="5" cols="22" name="address" value="<?php if(isset($address)) echo $address ?>">
</textarea>
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