<?="<?xml version=\"1.0\" encoding=\"utf-8\" ?>"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>The Earth Hall Virtual Tour - Natural History Museum</title>
		<script type="text/javascript" src="ajax.js"></script>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
	<div id="container">
	<div id="logo"></div>
	<div id="navi"><a href="javascript:loadPano(1)" class="panoLink">Visions of Earth</a> // 
	<a href="javascript:loadPano(2)" class="panoLink">The Power Within</a> // 
	<a href="javascript:loadPano(3)" class="panoLink">The Earth's Core</a> // 
	<a href="javascript:loadPano(4)" class="panoLink">Restless Surface</a> //
	<a href="javascript:loadInfo('info')">Home</a> //
	About Us //
	<a href="http://www.nhm.ac.uk/index.html">NHM Website</a>
	</div>
		<div id="panoDiv"><?php include('room1.html');?></div>
		<div id="infoDiv"><?php include('info.html');?></div>
	<div id="footer"><a href="http://validator.w3.org/check?uri=referer">XHTML</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> Valid </div>
	</div>
	</body>
</html>
