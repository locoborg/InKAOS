<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>New Location</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>

<link href="dock.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
 <style type="text/css">
 .dock img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->

</head>
<body>
<div style="text-align:center;color:#FFFFFF;">
<img border="0" src="images/logo.png">
<img border="0" src="images/inkaos.png">
</div>
<br /><br /><br />
<div style="text-align:left;width:400px;color:#999999;margin:auto auto;">
<input type="radio" name="sel" id="sel" value="inkaos"> InKAOS Desktop <br />
<input type="radio" name="sel" id="sel" value="kids"> Kids Desktop <br />
<input type="radio" name="sel" id="sel" value="coder"> Coder Desktop <br />
<input type="radio" name="sel" id="sel" value="my"> My Desktop <br />
<input type="radio" name="sel" id="sel" value="url"> Address: <input type="text" name="url" id="url" value="" size="25"><br />
<input type="radio" name="sel" id="sel" value="srch"> Search: <input type="text" name="kw" id="kw" value="" size="25"> 
<select name="se" id="se">
<option value="http://www.google.com.mx/search?q=">google</option>
<option value="http://search.yahoo.com/search?p=">yahoo</option>
<option value="http://www.bing.com/search?q=">bing</option>
<option value="http://www.ask.com/web?q=">ask</option>
</select>
</div>
<br />
<div style="text-align:center;color:#999999;margin:auto auto;">
<input type="button" name="go" value="GO" onclick="go()">
</div>
</body>
<script>
function go(){
	var rb=document.getElementsByName("sel");
	var val="";
	for(var i=0;i<rb.length;i++)
		if(rb[i].checked) val=rb[i].value;
	var url="desktop.php?look=";
	if(val=="url"){
		url=document.getElementById("url").value;
		if(url.indexOf("://")<0) url="http://"+url;
	}else if(val=="srch"){
		var kw=document.getElementById("kw").value;
		var se=document.getElementById("se").value;
		url=se+kw;
	}else url+=val;
	if(val!="") document.location=url;
	else alert("Error: No Selection!");
}
</script>
</html>
