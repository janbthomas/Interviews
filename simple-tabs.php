<?php require_once('functions.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>janbthomas.com - Simple Tabs</title>

<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="Keywords" content="Jan Thomas, Jan B Thomas, Web Developer, Search Engine Optimization, Customized Message Board, Customized WordPress" />
<link rel="icon" href="http://www.janbthomas.com/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.janbthomas.com/favicon.ico" type="image/x-icon" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="styleTabs.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script language="JavaScript" type="text/JavaScript">

function ShowThisTab(e)
{
	// e is the event object
	// e.target is the element
	// this is the element except in IE this is the window
	e = e || window.event;
	var target = e.target || e.srcElement;
	
	var myHash = target.hash.substr(1);

	var allTabs = document.getElementsByClassName('tab');
	for (var i = 0; i < allTabs.length; ++i) {
		var item = allTabs[i];  
		if (item.id == myHash)
			item.style.display = 'block';
		else 
			item.style.display = 'none';
	}
}
	
function AttachEvent(element, type, handler) { 	
		if (element.addEventListener) 
			element.addEventListener(type, handler, false); 	
		else element.attachEvent("on"+type, handler); 
} 
	
function setTabEvents()
{
	var text;
	var tabLinks = document.getElementsByClassName('tabLink');
	for (i = 0; i < tabLinks.length; i++) {
	  AttachEvent(tabLinks[i], 'click', ShowThisTab);
	}
}

</script>

</head>
<body onload="setTabEvents();">
<div id="mainwrap">

<div id="contentarea" class="clearfix">
<ul id="tabList">
	<li><a href="#tab1" class="tabLink">Tab 1</a></li>
    <li><a href="#tab2" class="tabLink">Tab 2</a></li>
    <li><a href="#tab3" class="tabLink">Tab 3</a></li>
</ul>

<div class="tab" id="tab1">
<h1>This is Tab 1</h1>
</div>
<div class="tab" id="tab2">
<h1>This is Tab 2</h1>
</div>
<div class="tab" id="tab3">
<h1>This is Tab 3</h1>
</div>

  </div><!--end contentarea -->

</div>
<!--end mainwrap-->



</body>
</html>
