<!DOCTYPE html>
<html lang="bs">
<meta charset="UTF-8">
<meta name=viewport" content="Width=device-width, initial-scale=1">

<head> 
<title> Biblioteka </title> 
<style>
.blokovi {
	float: right;
	background-color: #212121;
	color: #EEEEEE;
	margin: 10px;
	padding: 2px;
	width: 100px;
	text-align:center;
}
.modal {
	display: none;
	position: fixed;
	z-index: 1;
	right: 0;
	bottom: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgba(0,0,0,0.4);
}
.modal-content {

	overflow: auto;
	position: fixed;
	z-index: 1;
	right: 0;
	bottom: 0;

	background-color:rgba(66, 66, 66, 0.8);
	color: #E0E0E0;
	margin: auto;
	padding: 20px;
	border: 1px solid #888;
	width: 50%;
	height: 50%;
	
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	animation-name: animatetop;
	animation-duration: 0.4s;
}
.close {
	color:#aaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
}
.close:hover, 
.close:focus {
	color: black;
	text-decoration: none;
	cursor: pointer;
}
.modal-header {
	padding: 2px 16px;
	background-color: #E0E0E0;
	color: #212121;
}
.modal-body {padding 2px 16px;}

.modal-footer {
	padding: 2px 16px;
	background-color: #E0E0E0;
	color: #212121;
}


@keyframes animatetop {
	from{bottom: -300px; opacity: 0}
	to{bottom: 0; opacity: 1}
}

</style>

</head>

<style>
body {
	font-family: "Raleway", sans-serif;
	background-image: url('bg6.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: 100% 100%;
	color:#E0E0E0;
}
</style>

<body>

<div class="blokovi">
	<p><button id="myBtn"; onclick="document.getElementById('myModal').style.display='block'"; style="background-color:transparent; border:none; outline:none; color:#EEEEEE; cursor:pointer; font-size:15px"> Kontakt </button></p>
</div>
<div class="blokovi">
	<p><a href="" style="text-decoration:none; color:#EEEEEE"> Knjige </a></p>
</div>
<div class="blokovi">
	<p><a href="" style="text-decoration:none; color:#EEEEEE"> Prijava </a></p>
</div>

<h1 style="color:#F5F5F5; position:fixed; top:40%; left:5%; font-size:80px;"> Dobrodošli! </h1>

<div id="myModal" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close">&times;</span>
			<h2>Kontakt informacije</h2>
		</div>
		<div class="modal-body">
			<p> <br> Adresa: Petrakijina 00, 71 000 Sarajevo <br><br> </p>
			<p> Broj telefona: +387 33 000 000 <br><br> </p>
			<p> Email: ime@mail.com <br><br></p>
		</div>
		<div class="modal-footer">
			<h3>Zehra Grboviæ</h3>
		</div>
	</div>
</div>

<script>

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
	modal.style.display = "block";
}
span.onclick = function() {
	modal.style.display ="none";
}
window.onclick = function(event) {
	if(event.target == modal) {
		modal.style.display = "none";
	}
}

</script>

</body>
</html>