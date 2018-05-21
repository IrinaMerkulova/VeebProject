<!DOCTYPE html>
<html>
<head>
<title>Kana KOOL</title>
<link rel="stylesheet" type="text/css" href="kukestyle.css">
<!--stili oformlenija iz faila kukestyle.css-->
</head>
<body>
<div style="position:absolute; right: 10px; top: 10px">
<?php 
date_default_timezone_set('Europe/Tallinn');

echo date(DATE_RSS);
?>
</div>
<h1>Kana KOOL</h1>
<!-- razdel s id= logo-->
<div id="logo">
<img src="petuh.png">
</div>
<!-- razdel s id= tabel-->
<div id="tabel">
<table>
<!--1.stroka--> 
	<tr>
	<td class="menu"><a href="uudised.html">Uudised</a></td>
	<td class="menu"><a href="kontakt.html">Kontakt</a></td>
	<td class="menu"><a href="tunniplaan.html">Tunniplaan</a></td>
	<td class="menu"><a href="opilased.html">Õpilased</a></td>
	<td class="menu"><a href="opetajad.html">Õpetajad</a></td>
	</tr>
<!--2.stroka-->
	<tr>
	<td colspan="5" class="suur">
    <iframe width="560" height="315" src="http://www.youtube.com/embed/IjbQnY4j4cw" frameborder="0" allowfullscreen></iframe>
	</td>
	</tr>

</table>
</div>
</body>
</html>