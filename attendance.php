<?php
session_start();
echo "<h3>".$_SESSION['name']."</h3>";
?>
<html>
<head>
<title>attendance</title>
<style type="text/css">
table{
position:absolute;
left:600px;
top:150px;
}
li{
transition:0.5s;
list-style-type:none;
text-align:center;
}
#a{
margin-top:0px;
position:absolute;	
left:450px;
}
#b{
position:absolute;
left:520px;
}
a:hover{
color:blue;
size:22px;
}
a{
text-decoration:none;
font-size:20px;
color:black;
text-align:center;
padding:12px;
}
.a{
position:absolute;
top:auto;
left:2px;
}
.b{
position:absolute;
top:130px;
left:90px;
}
th{
font-size:22px;
}
input{
font-size:22px;
border-radius:9px;
text-align:center;
}
th{
color:black;
font-size:22px;
}
td{
color:black;
font-size:20px;
text-align:center;
}
h4{
color:red;
}
</style>
</head>
<body>
<h4 align="center">***************NOTE:Please fill total days below before you mark your attendence************</h4>
<form action="" method="post">
<?php
if($_SESSION['name'])
{
echo "<table width=640 border=0 border align=center cellpadding=12>";
echo "<thead>";
echo "<th>ID</th>";
echo "<th>Student Name</th>";
echo "<th>Attendance</th>";
echo "</thead>";
$con=mysqli_connect("localhost","root","","student_details");

mysqli_query($con,"ALTER TABLE personals ADD present INTEGER(20) NOT NULL");
mysqli_query($con,"ALTER TABLE personals ADD absent INTEGER(20) NOT NULL");
mysqli_query($con,"ALTER TABLE personals ADD attendance INTEGER(20) NOT NULL");
$res=mysqli_query($con,"SELECT id,name FROM personals"); 
while($data=mysqli_fetch_assoc($res))
{
if($data['name'])
{
echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>"; 
echo "<td><a href=present.php?id=$data[id]>Present</a><a href=absent.php?id=$data[id]>absent</a></td>";
echo "</tr>";  
}
}
echo "<input type=text required placeholder='enter total days' name=days class=a>";
echo "<input type=submit value=go name=submit class=b>";
if(isset($_POST['submit']))
{
$_SESSION["days"]=$_POST["days"];
}





}
else
{
echo "<h2 align=center>******SESSION OUT******</h2>";
}
?> 
</form>
</body>
</html>