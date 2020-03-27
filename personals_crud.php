<?php
session_start();
echo "<h3>".$_SESSION['name']."</h3>";
?>
<html>
<head>
<title>personals details</title>
<style type="text/css">
th{
font-size:25px;
background-color:olive;
}
td{
font-size:22px;
background-color:cyan;
}
a{
text-decoration:none;
color:black;
}
a:hover{
color:red;
}
</style>
</head>
<body>
<?php
if($_SESSION['name'])
{
$con=mysqli_connect("localhost","root","","student_details");
$res=mysqli_query($con,"SELECT id,name,Fathername,mail_id,phone_number,address,Mode FROM personals");
echo "<table width=640 align=center cellpadding=12 bordercolor=white border=0>";
echo "<thead>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Father Name</th>";
echo "<th>Mail-id</th>";
echo "<th>Phone_number</th>";
echo "<th>Address</th>";
echo "<th>Mode Of Stay</th>";
echo "<th>Operations</th>";
echo "</thead>";
while($data=mysqli_fetch_assoc($res))
{
echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>";
echo "<td>".$data['Fathername']."</td>";
echo "<td>".$data['mail_id']."</td>";
echo "<td>".$data['phone_number']."</td>";
echo "<td>".$data['address']."</td>";
echo "<td>".$data['Mode']."</td>";
echo "<td><a href=edit1.php?id=$data[id]>Edit </a><a href=delete1.php?id=$data[id]>Delete</a></td>";
echo "</tr>";
}


echo "</table>";
}
else
{

echo "<h1 align=center>******SESSION OUT******</h1>";
}
?>
</body>
</html>