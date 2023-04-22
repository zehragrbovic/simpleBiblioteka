<?php $prijava=$_POST["Podnesi"]; ?>

<!DOCTYPE html>
<html lang="bs">
<meta charset="UTF-8">
<meta name="viewport" content="Width=device-width, initial-scale=1">

<head>
<title> Biblioteka </title>
<style>

.tekst {
	margin-left: 15%;
	color: #212121;
	text-align: center;
	width: 83%;
	overflow: auto;
	font-size: 20px;
	border-spacing: 0px 30px;
}
.tekst tr:hover {
	background-color: rgba(0,0,0,0.1);
}
.sidenav {
	height: 100%;
	width: 13%;
	position: fixed;
	z-index: 2;
	top: 0;
	left: 0;
	background-color: #212121;
	overflow-x: hidden;
	padding-top: 20px;
	text-align: left;
}
.topnav {
	top: 0;
	right: 0;
	overflow: hidden;
	background-color: #212121;
	position: fixed;
	width: 100%;
	z-index: 1;
	transition: top 0.3s;
}
.topnav a {
	float: right;
	color: #f2f2f2;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
	display:block;
}
.topnav a:hover {
	background-color:  #BDBDBD;
	color: black;
}
.topnav a.active {
	background-color:  #BDBDBD;
	color: #212121;
}
.topnav input[type=text] {
	float: right;
	padding: 6px;
	border: none;
	margin-top: 8px;
	margin-right: 16px;
	font-size: 17px;
}
.dno {
	position: fixed;
	bottom: 0;
}

@media screen and (max-width: 60px) {
	.topnav a, .topnav input[type=text] {
	float: none;
	display: block;
	text-align: left;
	width: 100%;
	margin: 0;
	padding: 14px;
	}
	.topnav input[type=text] {
	border: 1px solid #ccc;
	}
}

</style>
</head>

<style>
body {
	font-family: sans-serif;
	background-image: linear-gradient(to left, #BDBDBD, #E0E0E0, #EEEEEE);
	color:#E0E0E0;
	margin: 0;
	overflow: auto;
	height: 100%;
}
</style>

<body>

<div class="topnav">
	<a class="active" href="racun.php">Knjige</a>
	<a href="bibliotekahome.php">Pocetna</a>
	<input type="text" placeholder="Pretrazivanje... ne radi">
</div>

<div class="sidenav"> 

<?php

if(isset($prijava)) {
	$ime=$_POST["Prezime"];
	$prezime=$_POST["Ime"];
	$broj=$_POST["Broj"];
	echo "<br><p> Ime: $ime</p><p> Prezime: $prezime</p><p> Broj: $broj </p>";
}

?>

	<div class="dno">
	<p> <br> Adresa: <br> Petrakijina 00 <br> 71 000 Sarajevo <br><br> </p>
	<p> Broj telefona: <br> +387 33 000 000 <br><br> </p>
	<p> Email: <br> ime@mail.com <br></p>
	</div>

</div>


<table class="tekst">
	if(isset($prijava)) {<br><br>}
	<tr>
		<th> Naslovna stranica: </th>
		<th> Naziv djela: </th>
		<th> Autor: </th>
		<th> Stanje: </th>
	</tr>
	<tr>
		<td> <img src="hpn.jpg" alt="slika" style="width:100px; height:150px;"> </td>
		<td> Hronika ptice navijalice </td>
		<td> Haruki Murakami </td>
		<td> na citanju </td>
	</tr>
	<tr>
		<td> <img src="btt.jpg" alt="slika" style="width:100px; height:150px;"> </td>
		<td> Bezbojni Tsukuru Tazaki i njegove godine hodocasca </td>
		<td> Haruki Murakami </td>
		<td> dostupno </td>
	</tr>
	<tr>
		<td> <img src="upr.jpg" alt="slika" style="width:100px; height:150px;"> </td>
		<td> Ubiti pticu rugalicu </td>
		<td> Harper Lee </td>
		<td> dostupno </td>
	</tr> 
	<tr>
		<td> <img src="ips.jpg" alt="slika" style="width:100px; height:150px;"> </td>
		<td> Idi postavi strazara </td>
		<td> Harper Lee </td>
		<td> dostupno </td>
	</tr>
	<tr>
		<td> <img src="cgr.jpg" alt="slika" style="width:100px; height:150px;"> </td>
		<td> Cesljugar </td>
		<td> Donna Tartt </td>
		<td> na citanju </td>
	</tr>
	<tr>
		<td> <img src="hss.jpg" alt="slika" style="width:100px; height:150px;"> </td>
		<td> Hiljadu sjajnih sunaca </td>
		<td> Khaled Hosseini </td>
		<td> dostupno </td>
	</tr>  
	<tr>
		<td> <img src="df.jpg" alt="slika" style="width:100px; height:150px;"> </td>
		<td> Digital Fortress </td>
		<td> Dan Brown </td>
		<td> dostupno </td>
	</tr> 
	
</table>


</body>
</html>