<?php
session_start();
echo "***"."<b>"."<i>".$_SESSION['username']."</i>"."</b>";
?>
<html>
<head>
<title>attendance_fetch</title>
<style type="text/css">
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
}
#a{
color:blue;
font-size:24px;
}

</style>
</head>
<body>
<?php 
if($_SESSION["ID"] && $_SESSION["username"])
{
$con=mysqli_connect("localhost","root","","student_details");
$res=mysqli_query($con,"SELECT * FROM personals WHERE id='$_SESSION[ID]'");
$data=mysqli_fetch_assoc($res);
if($data)
{
echo "<table width=640 border=5 align=center bordercolor=white  cellpadding=9>";
echo "<tr>";
echo "<th><b>id</b></th>";
echo "<th><b>Name</b></th>";
echo "<th><b>present</b></th>";
echo "<th><b>absent</b></th>";
echo "<th><b>percentage</b></th>";
echo "</tr>";
echo "<tr>";
echo "<th class=b>".$data['id']."</th>";
echo "<th class=b>".$data['name']."</th>";
echo "<th class=b>".$data['present']."</th>";
echo "<th class=b>".$data['absent']."</th>";
echo "<th class=b>".$data['attendance']."%</th>";
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