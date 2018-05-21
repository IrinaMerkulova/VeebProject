<html>
<head>
<title>Kana kool</title>
<link rel="stylesheet" type="text/css" href="kukestyle.css">
<!--stili oformlenija iz faila kukestyle.css-->
</head>
<body>
<h1>Kuke KOOL</h1>
<?php
$dt = new DateTime();
echo $dt->format('H:i');
?>
<!-- razdel s id= logo-->
<div id="logo">
<img src="petuh.png">
</div>
<!-- razdel s id= tabel-->
<div id="tabel">
<table>
<!--1.stroka--> 
	<!-- <tr>
	<td><a href="uudised.html">Uudised</a></td>
	<td><a href="kontakt.html">Kontakt</a></td>
	<td><a href="tunniplaan.html">Tunniplaan</a></td>
	<td><a href="opilased.html">Õpilased</a></td>
	<td><a href="opetajad.html">Õpetajad</a></td>
	</tr> -->
	<tr>
		<td><a href="uudised.php">Uudised</a></td>
	</tr>
	<tr>
		<td><a href="kontakt.php">Kontakt</a></td>
	</tr>
	<tr>
		<td><a href="tunniplaan.php">Tunniplaan</a></td>
	</tr>
	<tr>
		<td><a href="opilased.php">Õpilased</a></td>
	</tr>
	<tr>
		<td><a href="opetajad.php">Õpetajad</a></td>
	</tr>
<!--2.stroka-->
	<tr>
	<td colspan="5" class="suur">
	<ul>
		<li><b>Õpilaste nimekiri:</b>
		<li>Kukene
		<li>Kanakene
		<li>Kana Suur
		<li>Kana Väike
		<li>Kuri Kukk
	</ul>
	</td>
	</tr>

</table>
</div>
</body>
</html>