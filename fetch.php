<?php
session_start();
echo "<div class=head>";
echo "<span id=b>welcome</span>"."<span id=c>".$_SESSION["username"]."</span>"; 
echo "</div>"
?>
<html>
<head>
<title>fetch</title>
<style type="text/css">
span{
font-size:22px;
color:black;
padding:9px;
}
div.head{
width:auto;
height:100px;
background-color:green;
}
#b{
position:absolute;
left:400px;
top:2px;
font-size:60px;
}
#c{
margin:2px 2px;
position:absolute;
left:650px;
top:1px;
color:blue;
font-size:70px;
padding:12px;

}
a{
transition:0.5s;
border:2px solid black;
text-decoration:none;
font-size:22px;
background-color:lightgreen;
position:absolute;
right:10px;
top:10px;
border-radius:9px;
}
input{
text-align:center;
position:absolute;
top:0px;
right:0px;
width:100px;
font-size:10px;
border-radius:21px;
}

span{
color:black;
font-size:26px;
padding:9px;
}
li.con{
list-style-type:none;
border:2px;
border-color:black;
}
#a{
color:red; 
}
a:hover{
position:absolute;
right:20px;
background-color:white;
}
span.a{
color:teal;
font-size:20px;
padding:9px;
}
</style>
</head>
<body bgcolor="white">
<form method="post" action="">
</form>
<?php
echo "<span id=a>***<i>CHECK UR  DETAILS</i> ***</span><br><br>";
if($_SESSION["ID"] && $_SESSION["username"])
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"student_details");
$res=mysqli_query($con,"SELECT * FROM personals WHERE id ='$_SESSION[ID]'");
$data=mysqli_fetch_assoc($res);
if($data)
{
echo "<span><b>ID</b>:</span>"."<span class=a>".$data['id']."</span>"."<br>";
echo "<span><b>Name</b>:</span>"."<span class=a>".$data['name']."</span>"."<br>";
echo "<span><b>Father name</b>:</span>"."<span class=a>".$data['Fathername']."</span>"."<br>";
echo "<span><b>mail_id</b>:</span>"."<span class=a>".$data['mail_id']."</span>"."<br>";
echo "<span><b>phone number</b>:</span>"."<span class=a>".$data['phone_number']."</span>"."<br>";
echo "<span><b>address</b>:</span>"."<span class=a>".$data['address']."</span>"."<br>";
}
else
{
echo "<center><span id=a>*********<b>no records found<b>************</span></center>";
}
}
else
{
echo "<h2 >**** SESSION TIME OUT ****</h2>";
}
?>

</body>
</html>
