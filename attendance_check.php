<html>
<head>
<title>Attendance_</title>
<style type="text/css">
th{
font-size:22px;
font-family:"Verdana";
color:blue;
}
tr{
font-size:20px;
text-align:center;
font-family:"Comic Sans MS";
}
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","student_details");
$res=mysqli_query($con,"SELECT id,name,present,absent,attendance FROM personals");
echo "<table width='600' align='center' cellpadding='12'>";
echo "<thead>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Present</th>";
echo "<th>Absent</th>";
echo "<th>Attendance</th>";
echo "</thead>";
while($data=mysqli_fetch_assoc($res))
{
echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>";
echo "<td>".$data['present']."</td>";
echo "<td>".$data['absent']."</td>";
echo "<td>".$data['attendance']."%"."</td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>