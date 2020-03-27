<html>
<head>
<title>days</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","student_details");
$ct=mysqli_query($con,"CREATE TABLE days(id INTEGER(20) UNIQUE,name VARCHAR(30),Fee INTEGER(10),FOREIGN KEY(id) REFERENCES personals(id) ON UPDATE CASCADE ON DELETE CASCADE)");
if($ct)
{
echo "Table created";
}
?>
</body>
</html