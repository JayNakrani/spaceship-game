<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css" >
body
{
	-moz-user-select: -moz-none;
   -khtml-user-select: none;
   -webkit-user-select: none;
   overflow:hidden;
   background-image:url('imgs/bk.jpg');
}
#spaceShip
{
	min-width:250px;
	min-height:300px;
	position:absolute;
	z-index:9999;
	background-image:url(imgs/1.png);
	background-repeat:no-repeat;
	top:50px;
	left:100px;
	cursor:crosshair;
}
#scoreCardWrap
{
	position:fixed;
	top:0px;
	left:33%;
	background:#000000;
	padding:30px;
	color:#FFFFFF;
	font-family:"Courier New", Courier, monospace;
	font-size:15px;
}
#scoreCardWrap div
{
	float:left;
	margin:10px;
}
#scoreWrap, #missWrap
{
	border-right:white dotted 3px;
	padding-right: 13px;
}
#missDiv
{
	width:100%;
	height:800px;
}
#msgWrap
{
	width:100%;
	height:100%;
	background:#000000;
	opacity:0.6;
	z-index:10000;
	position:absolute;
	top:0px;
	left:0px;
}
#msg
{
	background:#FFFFFF;
	position:relative;
	top:20%;
	left:30%;
	padding:40px;
	width:400px;
	opacity:1;
	font-size:30px;
}
#msg span
{
	/*float:left;*/
	position:relative;
	color:RED;
}
#meLink
{
	color:#ff0000;
	font-family:Georgia, "Times New Roman", Times, serif;
	position:fixed;
	bottom:20px;
	right:20px;
	font-size:40px;
	cursor:pointer;
}
.hidden
{
	display:none;
}
#redirectWrap
{
	margin-left:70px;
	margin-top:40px;
}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
var scoreCount=0;
var missCount=0;
var successRatio=0;
var timeInt=2000;
var intRef=null;
function decrementTimer()
{
	var currentTime=parseInt(document.getElementById('timeValue').innerHTML);
	currentTime--;
	document.getElementById('timeValue').innerHTML=currentTime;
}
function moveShip(){var x=parseInt((Math.random())*(800));var y=parseInt((Math.random())*(600));$('#spaceShip').animate({top:y+300,left:x+250},timeInt)}

window.onload=function(){intRef=setInterval("moveShip()",timeInt+30)}
$(document).ready(function(){
						   moveShip();
						   $('#spaceShip').click(function(){scoreCount++;successRatio=scoreCount/missCount;document.getElementById('score').innerHTML=scoreCount;if(isFinite(successRatio.toFixed(2))){document.getElementById('successRatio').innerHTML=successRatio.toFixed(1)}else{document.getElementById('successRatio').innerHTML="NA"}if(scoreCount%5==0){timeInt=parseInt(timeInt/1.2);clearInterval(intRef);moveShip();intRef=setInterval("moveShip()",timeInt+30)}});
						    $('#missDiv').click(function(){missCount++;successRatio=scoreCount/missCount;document.getElementById('miss').innerHTML=missCount;document.getElementById('successRatio').innerHTML=successRatio.toFixed(1)});						
							
			  <?php
				  if(!isset($_GET['test']))
				  {
			  ?>
				  $(document).keydown(function(e){if(e.which==17||e.which==16||e.which==67){return false}});
			  <?php
					  }
			  ?>
			  $('#meLink').click(function(){
										  $('#msgWrap').toggleClass("hidden");
										  setInterval("decrementTimer()",1000);
										  setTimeout("window.location=\"http://www.facebook.com/dhananjay.nakrani\"",4000);
										  });
			  
						    
});
</script>
</head>

<body oncontextmenu="return false">
<div id="missDiv"></div>
<div id="scoreCardWrap">
	<div id="scoreWrap">
    	Score:
    	<span id="score">
    		0
    	</span>
    </div>
    <div id="missWrap">
    	Miss:
    	<span id="miss">
    		0
    	</span>
    </div>
    <div id="successRatioWrap">
    	Success Ratio:
    	<span id="successRatio">
    		NA
    	</span>
    </div>
</div>
<div id="msgWrap" class="hidden">
	<div id="msg">
    	<div><img src="imgs/livehand.png"  /></div>
        <div id="redirectWrap">Redirecting you to <span>dj</span>'s profile in <span id="timeValue">4</span>sec</div>
    </div>
</div>
<span id="spaceShip" title="powered by dj" comments="haha..!!..:D" hulluulu="0"></span>
<span id="meLink" >by dj</span>
</body>
</html>
