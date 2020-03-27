<?php
session_start();
echo "<h3>".$_SESSION['name']."</h3>"
?>
<html>
<head>
<title>hostel_crud</title>
<style type="text/css">
table{
position:absolute;
top:200px;
left:600px;
}
a{
text-decoration:none;
color:black;
}
a:hover{
color:blue;
font-size:22px;
}
tr{
font-size:20px;
padding:12px;
text-align:center;
font-family:"Comic Sans MS";
}
th{
font-size:22px;
font-family:"Vertica";
color:salmon;
}
h1{
color:blue;
}
span{
color:red;
}

</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","student_details");
if($_SESSION["name"])
{
$res=mysqli_query($con,"SELECT id,name,Mode FROM personals WHERE Mode='Hostel'");
while($data=mysqli_fetch_assoc($res))
{
mysqli_query($con,"INSERT INTO hostel(id,name) VALUES('$data[id]','$data[name]')");
}
echo "<form method='post' action=''>";
echo "<h1 align='center'>***HOSTELLERS***</h1>";

echo "<table width=640 align=center cellpadding=12 border=black>";
echo "<thead>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Fee</th>";
echo "<th>Operations</th>";
echo "</thead>";
$h=mysqli_query($con,"SELECT * FROM hostel h INNER JOIN personals p WHERE p.id=h.id AND p.Mode='Hostel'");
mysqli_query($con,"DELETE FROM hostel");
while($data=mysqli_fetch_assoc($h))
{
mysqli_query($con,"INSERT INTO hostel VALUES('$data[id]','$data[name]','$data[Fee]')");
echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>";
echo "<td>".$data['Fee']."</td>";
echo "<td><a href=hostel_edit.php?id=$data[id] >Edit </a><a href=hostel_delete.php?id=$data[id]>Delete</a></td>";
echo "</tr>";
}
echo "</table>";
echo "</form>";
}
else
{

echo "<h2 align=center>******YOUR OUT OF SESSION******</h2>";


}


?>
</body>
</html>