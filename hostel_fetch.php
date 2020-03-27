<?php
session_start();
echo $_SESSION['username'];
?>
<html>
<head>
<title>Hostel_fetch</title>
<style type="text/css">
th{
font-size:22px;
}
td{
font-size:20px;
text-align:center;
}
span{
font-size:20px;
color:red;
}
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","student_details");
if($_SESSION["ID"] && $_SESSION["username"])
{
echo "<table width=500 align=center cellpadding=12>";
echo "<thead>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Fee Paid</th>";
echo "<th>Due</th>";
echo "</thead>";
$h=mysqli_query($con,"SELECT * FROM hostel WHERE id='$_SESSION[ID]'");
$d=mysqli_query($con,"SELECT * FROM days WHERE id='$_SESSION[ID]'");
if($hos=mysqli_fetch_assoc($h))
{
$total=200000-$hos['Fee'];
echo "<tr>";
echo "<td>".$hos['id']."</td>";
echo "<td>".$hos['name']."</td>";
echo "<td>".$hos['Fee']."/-</td>";
echo "<td><span>".$total."/-</span></td>";
echo "</tr>";
}
else if($day=mysqli_fetch_assoc($d))
{
$total=75000-$day['Fee'];
echo "<tr>";
echo "<td>".$day['id']."</td>";
echo "<td>".$day['name']."</td>";
echo "<td>".$day['Fee']."/-</td>";
echo "<td><span>".$total."/-</span></td>";
echo "</tr>";
}
else
{
echo "SORRY NO RECORD OF YOURS IS FOUND";
}
}
else
{
echo "<h2 >**** SESSION TIME OUT ****</h2>";
}
echo "</table>";
?>
</body>
</html>