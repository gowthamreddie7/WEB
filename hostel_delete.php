<html>
<head>
<title>delete</title>
</head>
<body bgcolor="olive">
<font size="6" color="white">
<?php

$id=$_GET['id'];

$con=mysqli_connect("localhost","root","","student_details");

$res=mysqli_query($con,"DELETE FROM hostel WHERE id='$id'");

var_dump($res);

header("Location:hostel_crud.php");
?>
</font>
</body>
</html>