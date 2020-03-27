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
top:200px;
width:120px;
text-align:center;
background-color:grey;
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
background-color:salmon;
top:50px;
}
#e{
background-color:salmon;
top:100px;
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
ul li ul{
visibility:hidden;
}
ul li:hover ul{
visibility:visible;
}
</style>
</head>
<body bgcolor="white">
<ul>
<li id="a"><a href="personals_crud.php" target="a" >STUDENT</a></li>
<li id="b"><a href="marks_crud.php" target="a">STUDENT_MARKS</a></li>
<li id="c"><a href="attendance.php" target="a">ATTENDENCE</a></li>
<li><a href="">FEES</a>
<ul>
<li id="d"><a href="hostel_crud.php" target="a">HOSTEL</a></li>
<li id="e"><a href="days_crud.php" target="a">DAYS SCHOLARS</a></li>
</ul>
</li>
</ul>
</body>
</html>