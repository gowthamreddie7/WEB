<?php
session_start();
?>
<html>
<head>
<title>present</title>
</head>
<body bgcolor="teal">
<font size="6" color="white">
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","student_details");
$res=mysqli_query($con,"SELECT present,absent from personals WHERE id=$id");
$data=mysqli_fetch_assoc($res);
$d=$data['present']+1;
if($d+$data['absent']<=$_SESSION['days'])
{
$r=$d/$_SESSION["days"]*100;
mysqli_query($con,"UPDATE personals SET attendance='$r' WHERE id=$id");
mysqli_query($con,"UPDATE personals SET present='$d' WHERE id=$id");
header("Location:attendance.php");
}
else
{
echo "<script>alert('invalid calculation')</script>";
header("Location:error_message.php");
}
?>
</font>
</body>
</html>