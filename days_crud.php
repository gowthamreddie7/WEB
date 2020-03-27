<?php
session_start();
echo "<h3>".$_SESSION['name']."</h3>"
?>
<html>
<head>
<title>days_crud</title>
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
color:red;
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
echo "";
$con=mysqli_connect("localhost","root","","student_details");
if($_SESSION["name"])
{
echo "<form method=post action= >";
echo "<h1 align='center'>*** DAY SCHOLARS***</h1>";
echo "<table width=640 align=center cellpadding=12 border=black>";
echo "<thead>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Fee</th>";
echo "<th>Operations</th>";
echo "</thead>";
$res=mysqli_query($con,"SELECT id,name,Mode FROM personals WHERE Mode='Days'");
while($data=mysqli_fetch_assoc($res))
{
mysqli_query($con,"INSERT INTO days(id,name) VALUES('$data[id]','$data[name]')");
}
$res=mysqli_query($con,"SELECT * FROM days d INNER JOIN personals p WHERE p.id=d.id AND p.Mode='Days'");
mysqli_query($con,"DELETE FROM days");
while($data=mysqli_fetch_assoc($res))
{
mysqli_query($con,"INSERT INTO days VALUES('$data[id]','$data[name]','$data[Fee]')");

echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>";
echo "<td>".$data['Fee']."</td>";
echo "<td><a href=days_edit.php?id=$data[id] >Edit </a><a href=days_delete.php?id=$data[id]>Delete</a></td>";
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