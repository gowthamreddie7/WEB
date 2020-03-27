<html>
<head>
<title>error message</title>
<style type="text/css">
h2{
color:red;
}
label{
font-size:15px;
color:blue

}



</style>
</head>
<body>


<h2>**********Please Enter Number Of Days**********</h2>
<form method="post" action="">
<label>***Press below button to get back to attendance module</label></br>
<input type="submit" value="go" name="go">
</form>
<?php
if(isset($_POST['go']))
{
header("Location:attendance.php");
}
?>
</body>
</html>