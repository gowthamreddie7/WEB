<html>
<head>
<title>Forgot</title>
<script type="text/css">
function dform()
{
window.location=forgot.php;
}
</script>
<style type="text/css">
body{
background-image:url("4.jfif");
background-repeat:no-repeat;
background-size:2000px auto;
}
div.container{
border:2px solid auto;
position:absolute;
top:250px;
left:500px;
width:300px;
height:350px;
background-color:auto;
margin:16px auto 0px auto;
padding:9px;
border-radius:9px;
}
input{
font-size:22px;
border-radius:9px;
margin:16px auto 0px auto;
padding:9px;
}
span{
padding:9px;
color:black;
font-size:22px;
}
div.head{
position:absolute;
top:70px;
left:500px;
width:300px;
height:100px;
background-color:auto;
border:2px solid auto;
border-radius:1px;
padding:9px;
margin:16px auto 0px auto;
}
span.b{
font-family:Fantasy;
color:teal;
padding:9px;
position:absolute;
left:60px;
top:1px;
}
</style>
</head>
<body>
<div class="head">

<span class="b"><h1>FORGOT PASSWORD</h1></span>

</div>
<div class="container">
<form method="post" action="" autocomplete="off">
<span>Username</span>
<input type="email" placeholder="enter username" name="uname" required autofocus>
<span>New password:</span>
<input type="password" name="opass" placeholder="enter new password" required>

<span>Enter once more:</span>
<input type="password" name="npass" placeholder="enter password again" required>
<input type="submit" value="change" name="submit">
<input type="reset" value="clear" name="clear">
</form>
</div>
<?php
$con=mysqli_connect("localhost","root","","student_details");
if(isset($_POST['submit']))
{
if($_POST['opass']==$_POST['npass'])
{
$uname=$_POST['uname'];
$opass=$_POST['opass'];
$npass=$_POST['npass'];
$res=mysqli_query($con,"UPDATE personals SET password='$npass' WHERE mail_id='$uname'");
if($res)
{
echo "<script>alert('New password updated');</script>";
header("Location:validation.php");
}
else
{
echo "<script>alert('Check your username');</script>";
}
}
else
{
echo "<script>alert('Incorrect match');</script>";

}
}

?>
</body>
</html>