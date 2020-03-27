<html>
<head>
<title>College management</title>
<style type="text/css">
span{
font-size:50px;
color:black;
position:absolute;
top:200px;
left:700px;
background-color:white;
}
body{
background-image:url("4.jfif");
background-repeat:no-repeat;
background-size:2100px auto;
}
div.container{
width:310px;
height:300px;
padding:9px;
line-height:20px;
border:2px solid auto;
position:absolute;
left:600px;
top:300px;
}
label.c{
font-size:30px;
color:white;;
padding:9px;
position:absolute;
left:5px;
top:10px;
}
label.d{
font-size:30px;
color:white;
padding:9px;
position:absolute;
left:5px;
top:120px;

}
input.a{
font-size:24px;
border-radius:9px;
margin:30px;
position:absolute;
left:3px;
top:32px;
padding:12px;
}
input.b{
font-size:24px;
border-radius:9px;
margin:30px;
position:absolute;
left:3px;
top:130px;
padding:12px;
}
input.l{
width:100px;
height:50px;
position:absolute;
top:230px;
left:150px;
border-radius:9px;
}
</style>
</head>
<body>
<span><b>ADMIN</b></span>
<div class="container">
<form action="" method="post" autocomplete="off">
<label class="c">Username</label>
<input type="text" placeholder="enter username" name="uname" required autofocus class="a">
<label class="d">Password</label>
<input type="password" placeholder="enter password" name="upass" required class="b">
<input  type="submit" value="login" name="submit" class="l">
</form>
</div>
<?php
if(isset($_POST['submit']))
{
if($_POST['uname']=="gowtham" && $_POST['upass']=="gowtham0416")
{
session_start();
$_SESSION["name"]=$_POST['uname'];
header("Location:design1.php");
}
else
{
echo "<script>alert('incorrect username or password');</script>";
}
}
?>
</body>
</html>