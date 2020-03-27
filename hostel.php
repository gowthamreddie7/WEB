<html>
<head>
<title>hostel</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","student_details");
$ct=mysqli_query($con,"CREATE TABLE hostel(id INTEGER(10) UNIQUE,name VARCHAR(30),Fee INTEGER(10),FOREIGN KEY(id) REFERENCES personals(id) ON DELETE CASCADE)");
if($ct)
{
echo "yes";
}
else
{
echo "no";
}



?>
</body>
</html>