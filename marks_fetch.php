<?php
session_start();
echo "***"."<b>"."<i>".$_SESSION['username']."</i>"."</b>";
?>
<html>
<head>
<title>marks_fetch</title>
<style type="text/css">
body{
}
th{
font-size:26px;
}
th.b{
color:blue;
font-size:24px;
}
table{
position:absolute;
top:150px;
left:500px;
}
span{
font-size:23px;
color:red;
}
#a{
color:black;
font-size:24px;
}
</style>
</head>
<body>
<?php 
echo "<hr size=5 color=white width=40%>";
echo " <span>Result for exam conducted on: </span>"."<span id=a>".date("d-m-Y")."</span>"."</br>";
if($_SESSION["ID"] && $_SESSION["username"])
{
$con=mysqli_connect("localhost","root","","student_details");
$p=mysqli_query($con,"SELECT name FROM personals p WHERE p.id='$_SESSION[ID]'");
$name=mysqli_fetch_assoc($p);
$res=mysqli_query($con,"SELECT * FROM marks m WHERE m.id='$_SESSION[ID]'");
$data=mysqli_fetch_assoc($res);
if($data)
{
$result=$data['phy']+$data['chem']+$data['maths'];
echo "<table width=640 border=5 align=center bordercolor=white cellpadding=9>";

echo "<tr>";

echo "<th><b>id</b></th>";
echo "<th><b>Name</b></th>";
echo "<th><b>Maths</b></th>";
echo "<th><b>Physics</b></th>";
echo "<th><b>Chemistry</b></th>";
echo "<th><b>Total</b></th>";
echo "</tr>";
echo "<tr>";
echo "<th class=b>".$data['id']."</th>";
echo "<th class=b>".$name['name']."</th>";
echo "<th class=b>".$data['maths']."</th>";
echo "<th class=b>".$data['phy']."</th>";
echo "<th class=b>".$data['chem']."</th>";

echo "<th class=b>".$result."</th>";
echo "</tr>";
echo "</table>";
}
else
{
echo "****<h3><b>NO RECORDS FOUND</b></h3>****";
}
}
else
{
echo "<h2 >**** SESSION TIME OUT ****</h2>";
}









?>
</body>
</html>