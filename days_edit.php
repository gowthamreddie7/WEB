<?php
session_start();
echo "<h3>".$_SESSION['name']."</h3>"
?>
<html>
<head>
<title>edit2</title>
<style type="text/css">
input{
font-size:15px;
text-align:center;
}
span{
color:red;

}
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
h1
{
color:blue;
}
</style>
</head>
<body>
<?php
$sid=$_GET['id'];
$con=mysqli_connect("localhost","root","","student_details");

echo "<form method='post' action='' autocomplete='off'>";
echo "<h1 align='center'>*** DAY SCHOLARS***</h1>";
echo "<div class='container'>";
echo "<table width=640 align=center cellpadding=12 border=black>";
echo "<thead>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Fee</th>";
echo "<th>Submit</th>";
echo "</thead>";
$res=mysqli_query($con,"SELECT * FROM Days");
while($data=mysqli_fetch_assoc($res))
{
$Fee=$data['Fee'];
if($data['id']==$sid)
{
echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>";
echo "<td><input type='text' placeholder='enter fee' required name='fee' value='$Fee'</td>";
echo "<td><input type='submit' name='submit' class='input'></td>";
echo "</tr>";
}
else
{
echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['name']."</td>";
echo "<td>".$data['Fee']."</td>";
echo "<td><span>XXXX</span></td>";
echo "</tr>";
}
}
if(isset($_POST['submit']))
{
if($_POST['fee']<=75000)
{
mysqli_query($con,"UPDATE Days SET Fee='$_POST[fee]' WHERE id=$sid");
header("Location:days_crud.php");
}
else
{
echo "<script>alert('Enter Valid Amount');</script>";
}
}

echo "</table>";
echo "</div>";
echo "</form>";
?>
</body>
</html>