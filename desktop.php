<?php
$look=$_REQUEST['look'];
if($look=="") $look="InKAOS";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Desktop [<?=$look?>]</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>

<link href="dock.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
 <style type="text/css">
 .dock img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->
<!-- Common JS files -->
<script type='text/javascript' src='zp/utils/zapatec.js'></script>

<!-- Custom includes -->	
<script type='text/javascript' src='zp/zpwin/src/window.js'></script>


<link href="zp/zpwin/themes/osx.css" rel="stylesheet" type="text/css">
<link href="zp/zpextra/themes/indicator/default.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript" src="zp/utils/indicator.js"></script> 

</head>
<body onload="javascript:max()" style="background: #000000 url(images/wallpaper.png) no-repeat center top;">

<!--bottom dock -->
<div class="dock" id="dock2">
  <div class="dock-container2">
	  <a class="dock-item2" href="javascript:iWin('http://www.yahoo.com','Profile setup',400,300);"><span>Home</span><img src="images/home.png" alt="home" /></a> 
	  <a class="dock-item2" href="javascript:iWin('http://www.frontera.info');"><span>Contact</span><img src="images/email.png" alt="contact" /></a>
	  <a class="dock-item2" href="#"><span>iDisk</span><img src="images/iDisk.png" alt="idisk" /></a> 
	  <a class="dock-item2" href="#"><span>Portfolio</span><img src="images/portfolio.png" alt="portfolio" /></a> 
	  <a class="dock-item2" href="#"><span>Music</span><img src="images/music.png" alt="music" /></a> 
	  <a class="dock-item2" href="#"><span>Video</span><img src="images/video.png" alt="video" /></a> 
	  <a class="dock-item2" href="#"><span>History</span><img src="images/history.png" alt="history" /></a> 
	  <a class="dock-item2" href="#"><span>Calendar</span><img src="images/calendar.png" alt="calendar" /></a> 
	  <a class="dock-item2" href="#"><span>Links</span><img src="images/link.png" alt="links" /></a> 
	  <a class="dock-item2" href="#"><span>RSS</span><img src="images/rss.png" alt="rss" /></a> 
	  <a class="dock-item2" href="#"><span>RSS2</span><img src="images/rss2.png" alt="rss" /></a> 
  </div>
</div>
<div style="width:0px;overflow:hidden;">
<a href='http://www.zapatec.com/'>Zapatec, Inc.</a>
</div>
</body>
<!--dock menu JS options -->
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 50,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 40,
					proximity: 90,
					halign : 'center'
				}
			)
			$('#dock2').Fisheye(
				{
					maxWidth: 60,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container2',
					itemWidth: 40,
					proximity: 80,
					alignment : 'left',
					valign: 'bottom',
					halign : 'center'
				}
			)
		}
	);

function sWin(cont,tit,w,h){
	if(!w) w=Math.floor(document.body.clientWidth*0.4);
	if(!h) h=400;
	var x=(document.body.clientWidth-w)/2+100-Math.floor(Math.random()*51);
	var y=(document.body.clientHeight-h)/2+200-Math.floor(Math.random()*51);
	Zapatec.Window.setup({
		title:tit,
		left:x, 
		top:y,
		width: w,
		height: h,
		showStatus : false,
		showMinButton : false,
		theme : "osx", 
		content : cont
	});
}
function iWin(url,tit,w,h){
	if(!w) w=Math.floor(document.body.clientWidth*0.4);
	if(!h) h=400;
	var x=(document.body.clientWidth-w)/2+100-Math.floor(Math.random()*51);
	var y=(document.body.clientHeight-h)/2+200-Math.floor(Math.random()*51);
	Zapatec.Window.setup({
		title:tit,
		left:x, 
		top:y, 
		width: w,
		height: h,
		showStatus : false,
		showMinButton : false,
		theme : "osx",
		iframeContent:true ,
		urlContent  : url
	});
}

function max(){ 
var obj = new ActiveXObject("Wscript.shell"); 
obj.SendKeys("{F11}"); 
} 
</script>
</html>
