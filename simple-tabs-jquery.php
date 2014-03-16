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
$(function() {
	
$( ".tabLink" ).on( "click", function( event ) {
	var linkTo = event.target;
    var myHash = this.hash.substr(1);
	ShowThisTab(myHash);
	
}); 

}); 

function ShowThisTab(myHash)
{
	var allTabs = document.getElementsByClassName('tab');
	for (var i = 0; i < allTabs.length; ++i) {
		var item = allTabs[i];  
		if (item.id == myHash)
			item.style.display = 'block';
		else 
			item.style.display = 'none';
	}
}
	
</script>

</head>
<body>
<div id="mainwrap"><!-- #BeginLibraryItem "/Library/header.lbi" -->
    <div id = "menu">
	<div id="contactbtn"><a href="#" onclick="window.open('http://www.janbthomas.com/jansblog/contact/', 'askconsultant','toolbar=yes,location=yes,directories=no,status=no,menubar=yes,scrollbars=no,resizable=no,width=525,height=500,top=100,left=250');">
    <img src="images/contactbtn.jpg" alt="Contact Jan Thomas Consulting" width="98" height="29" border="0"/></a></div>      		
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="websites.php">WEBSITES</a></li>
        <li><a href="about.php">ABOUT JAN</a></li>
        <li><a href="jansblog">BLOG</a></li>
      </ul>
    </div>
<div id="banner" class="clearfix">
	<div id="logo"><img src="images/logosmall.gif" alt="janbthomas.com web development" width="345" height="110" /></div>
  <div id="bannerphoto"><?php rotateImages("images/smallbanner");?></div>
</div>
<!-- #EndLibraryItem -->

<div id="contentarea" class="clearfix">
<!---
<ul id="tabList">
	<li><a href="#tab1" class="tabLink">Tab 1</a></li>
    <li><a href="#tab2" class="tabLink">Tab 2</a></li>
    <li><a href="#tab3" class="tabLink">Tab 3</a></li>
</ul>
-->
<div id="tabLinks">
	<a href="#tab1" class="tabLink">Tab 1</a>
    <a href="#tab2" class="tabLink">Tab 2</a>
    <a href="#tab3" class="tabLink">Tab 3</a>
</div>

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

<!-- #BeginLibraryItem "/Library/footer.lbi" -->  
<p id="copywrite">&copy; 2014 JanBThomas Last Updated February 2014. <a href="jansblog/privacy-policy" class="uline">Privacy Policy</a></p>
<!-- #EndLibraryItem --></div>
<!--end mainwrap-->



</body>
</html>

