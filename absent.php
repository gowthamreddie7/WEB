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
$res=mysqli_query($con,"SELECT absent,present from personals WHERE id=$id");
$data=mysqli_fetch_assoc($res);
$d=$data['absent']+1;
if($d+$data['present']<=$_SESSION['days'])
{
mysqli_query($con,"UPDATE personals SET absent='$d' WHERE id=$id");
header("Location:attendance.php");
}
else
{
header("Location:error_message.php");
}
?>
</font>
</body>
</html>