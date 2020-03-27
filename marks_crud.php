<?php
session_start();
echo "<h3>".$_SESSION['name']."</h3>"
?>

<html>
<head>
<title>marks</title>
<style type="text/css">
label{
color:red;
font-size:20px;
}
table{
position:absolute;
top:200px;
left:600px;
}
th{
font-size:22px;
}
td{
font-size:19px;
padding:9px;
text-align:center;
}
a{
text-decoration:none;
color:black;
}
a:hover{
color:red;
}
#new{
color:blue;
position:absolute;
left:30px;
top:75px;
font-size:20px;
border:2px solid black;
border-radius:9px;
background-color:yellow;
}
#new:hover{
transition:0.5s;
position:absolute;
font-size:22px;
background-color:white;
}
</style>
</head>
<body>
<?php
if($_SESSION['name'])
{
echo "<table width=640 align=center cellpadding=12 border=0 bordercolor=white>";
echo "<thead>";
echo "<th>Sno</th>";
echo "<th>Name</th>";
echo "<th>Maths</th>";
echo "<th>Phy</th>";
echo "<th>Chem</th>";
echo "<th>Total</th>";
echo "<th>Operations</th>";
echo "</thead>";
$con=mysqli_connect("localhost","root","","student_details");
$res=mysqli_query($con,"SELECT m.id,m.phy,m.chem,m.maths,p.name FROM marks m INNER JOIN personals p WHERE p.id=m.id");
while($data=mysqli_fetch_assoc($res))
{
$total=$data['maths']+$data['phy']+$data['chem'];
echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>";
echo "<td>".$data['maths']."</td>";
echo "<td>".$data['phy']."</td>";
echo "<td>".$data['chem']."</td>";
echo "<td>".$total."</td>";
echo "<td><a href=edit.php?id=$data[id]>Edit </a><a href=delete.php?id=$data[id]> Delete</td>";
echo "</tr>";
}
echo "</table>";
echo "<label>**FOR NEW ENTRY CLICK BELOW LINK</label>";
echo "<a href=marks.php  id='new'>New</a>";
}
else
{

echo "<h2 align=center>******YOUR OUT OF SESSION******</h2>";

}

?>
</body>
</html>