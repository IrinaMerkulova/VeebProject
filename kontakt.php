<!DOCTYPE html> 
<html>
<head>
<title>Kana kool</title>
<link rel="stylesheet" type="text/css" href="kukestyle.css">
<!--stili oformlenija iz faila kukestyle.css-->
</head>
<body>

<div class="time">
<?php
$d = getdate(); // использовано текущее время
echo "Сейчас: $d[mday].$d[mon].$d[year] $d[hours]:$d[minutes]";
?>
</div>

<h1>Kuke KOOL</h1>
<!-- razdel s id= logo-->
<div id="logo">
<img src="kurica.jpg">
</div>
<!-- razdel s id= tabel-->
<div id="tabel">
	<li>
	<a href="uudised.php">Uudised</a></li>
	<li><a href="kontakt.php">Kontakt</a></li>
	<li><a href="tunniplaan.php">Tunniplaan</a></li>
	<li><a href="opilased.php">Õpilased</a></li>
	<li><a href="opetajad.php">Õpetajad</a>
	</li>
<table>
	<tr>
	<td colspan="5" class="suur">Kontakti direktoriga Kuke Kukk:
	<br>tel 88005553535
	<br>aadress: Tehniline uus 256, Tallinn
	</td>
	</tr>
</table>
</div>
</body>
</html>