<?php
echo date("h:i:sa");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kana KOOL</title>
<link rel="stylesheet" type="text/css" href="kukestyle.css">
<!--stili oformlenija iz faila kukestyle.css-->
</head>
<body>
<h1>Kana KOOL</h1>
<!-- razdel s id= logo-->
<div id="logo">
<img src="petuh.png">
</div>
<!-- razdel s id= tabel-->
<div id="tabel">
<table>
<!--1.stroka--> 
	<ul>
	<li><a href="uudised.php">Uudised</a></li>
	<li><a href="kontakt.php">Kontakt</a></li>
	<li><a href="tunniplaan.php">Tunniplaan</a></li>
	<li><a href="opilased.php">Õpilased</a></li>
	<li><a href="opetajad.php">Õpetajad</a></li>
	</ul>
<!--2.stroka-->
	<tr>
	<td colspan="5" class="suur">
<!--vnutr jacheiki tablica 2 na 2-->
<table class="vaike">
<tr>
	<td class="vaike"><img src="kukk1.jpg"></td>
	<td class="vaike"><img src="kukk2.jpg"></td>
</tr>
<tr>
	<td class="vaike"><img src="kukk3.jpg"></td>
	<td class="vaike"><img src="kukk4.jpg"></td>
</tr>
</table>
	
	</td>
	</tr>

</table>
</div>
<p><img src="10.gif"></p>
</body>
</html>