<html>
<head>
<title>delete</title>
</head>
<body bgcolor="olive">
<font size="6" color="white">
<?php

$id=$_GET['id'];

$con=mysqli_connect("localhost","root","","student_details");

$res=mysqli_query($con,"DELETE FROM marks WHERE id='$id'");

var_dump($res);

header("Location:marks_crud.php");
?>
</font>
</body>
</html>