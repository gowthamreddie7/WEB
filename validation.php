<html>
<head>
<title>validation</title>
<script language="javascript">
function dform(){
window.location="signup.php";
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
top:200px;
left:500px;
width:300px;
height:300px;
background-color:auto;
margin:16px auto 0px auto;
padding:9px;
border-radius:9px;
}
div.head{
position:absolute;
top:78px;
left:500px;
width:300px;
height:100px;
background-color:auto;
border:2px solid auto;
border-radius:1px;
padding:9px;
margin:16px auto 0px auto;
}
input.a{
position:absolute;
left:530px;
top:500px;
color:red;
border-radius:2px;

}
input{
font-size:22px;
border-radius:9px;
margin:16px auto 0px auto;
padding:9px;
}
span{
font-size:22px;
color:black;
padding:9px;
}
span.b{
font-family:Fantasy;
color:salmon;
padding:9px;
position:absolute;
left:60px;
top:1px;
}
</style>
<script type="text/javascript">
function forgot()
{
window.location="forgot.php";
}

</script>
</head>
<body>
<div class="head">

<span class="b"><h1>LOGIN</h1></span>

</div>
<div class="container">
<form method="post" action="" autocomplete="off">
<span>Username</span>
<input type="text" placeholder="enter username" name="uname" required autofocus>
<span>password:</span>
<input type="password" name="upass" placeholder="enter password" required>
<input type="submit" value="sign in" name="submit">
<input type="reset" value="clear" name="clear">
<input type="button" value="sign up" onclick="dform()">
</form>
</div>
<?php
session_start();
if(isset($_POST['submit']))
{
$username=$_POST['uname'];
$password=$_POST['upass'];
if($username && $password)
{
$con=mysqli_connect("localhost","root","","student_details");
$res=mysqli_query($con,"SELECT * FROM personals WHERE mail_id='$username'");
while($data=mysqli_fetch_assoc($res))
{
if($username==$data['mail_id'] && $password==$data['password'])
{
$_SESSION["username"]=$data['name'];
$_SESSION["ID"]=$data['id'];
header("Location:design.php");
}
else
{
echo "<script>alert('incorrect password')</script>";
echo "<input type='button' value='forgot password' onclick='forgot()' class='a'";
}
}
 }
else
{
echo "enter correct username";
}
}
?>
</body>
</html>