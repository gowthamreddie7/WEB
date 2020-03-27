<?php
session_start();
?>
<html>
<head>  
<title>quiz</title>
<style type="text/css">
h1{
color:salmon;
background-color:green;
width:200px;
text-align:center;
position:absolute;
left:600px;
border:2px dotted white;
border-radius:9px;
}
body{
background:linear-gradient(yellow,blue);
}

div.head{
width:940x;
height:100px;
background:linear-gradient(red,yellow);
padding:9px;
}
#demo{
border:3px black dotted;
background-color:auto;
text-align:center;
border-radius:9px;
}
div.timer{
width:50px;
height:25px;
background-color:auto;
}
div.questions{
width:1000px;
height:300px;
}
</style>
<script type="text/javascript">
var min,sec;
var answers=["B","A","A"];
tot=answers.length;
function getCheckedValue(Name)
{
var radios=document.getElementsByName(Name);
for(var y=0;y<radios.length;y++)
{
if(radios[y].checked) 
return radios[y].value;
}
}
function getscore()
{
var score=0;
for(var i=0;i<tot;i++)
if(getCheckedValue("question"+i)===answers[i])
score+=1;
return score;
}
function returnscore(){
alert("you completed your xam in:"+min+":"+sec);	
document.write("your score is "+getscore()+"/"+tot +" in "+min+":"+sec);
}
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);
min=minutes;
sec=seconds;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
	timer=0;

	alert("TIME OUT......");
	returnscore();
        }
    }, 1000);
}

window.onload = function () {
    var limit = 60*0.1,
        display = document.querySelector('#demo');
    startTimer(limit,display);
};
</script>
</head>

<body size="6" color="black">
<div class="head">
<h1>CODE QUIZ</h1>
</div>
<div class="timer">
<p id="demo"></p>
</div>
<div class="questions">
<ol>
<li>
<h3>wht is ur name?</h3>
<input type="radio" name="question0" value="A">aravind</input><input type="radio" name="question0" value="B">gowtham</input>
</li>
<li>
<h3>full form of js?</h3>
<input type="radio" name="question1" value="A">javascript</input><input type="radio" name="question1" value="B">no mention</input>
</li>
<li>
<h3>do u have gf?</h3>
<input type="radio" name="question2" value="A">YES</input><input type="radio" name="question1" value="B">NO</input>
</li>
</ol>
</div>
<p id="t"><button onclick="returnscore()">view result</button></p>
</body>
</html>