<html>
<head>
<title>vertical list</title>
<style type="text/css">
ul{
font-size:26px;
color:white;
}
li{
transition:0.5s;
list-style-type:none;
position:absolute;
left:1px;
width:120px;
text-align:center;
padding:3px;
border:1px solid white;
border-radius:9px;
}
#a{
background-color:grey;
position:absolute;
top:20px;
}
#b{
background-color:grey;
width:170px;
position:absolute;
top:80px;
}


#c{
background-color:grey;
position:absolute;
width:130px;
top:140px;
}

#d{
background-color:grey;
position:absolute;
top:200px;
}
a{
text-decoration:none;
color:white;
font-size:20px
}
li:hover{
position:absolute;
left:10px;
}


</style>
</head>
<body bgcolor="white">
<ul>
<li id="a"><a href="fetch.php" target="a" >STUDENT</a></li>
<li id="b"><a href="marks_fetch.php" target="a">STUDENT_MARKS</a></li>
<li id="c"><a href="attendance_fetch.php" target="a">ATTENDENCE</a></li>
<li id="d"><a href="hostel_fetch.php" target="a">FEES</a></li>
</ul>
</body>
</html>