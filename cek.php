<!DOCTYPE html>
<html>
<head>
<title>Penghitung Kata</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="description" content="Tools Untuk Menghitung Banyak Kata Dalam Tulisan"></head>
<style>
#isikata {
	border: 2px solid red;
	border-radius: 4px;
	background-color:black;
	color:white;
  }
body, html{
	background-image:url("https://i.ibb.co/5G8HLLz/istockphoto-1180184210-170667a.jpg");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height:100%;
	font-family:Helvetica;
}
button {
	color:white;
	background-color:black;
	height:30px;
	weight:100px;
}
a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
a:active {
  text-decoration: underline;
}
</style>
<body>
<form action="" method="post">
	<center>
	<br>
	<br>
	<br>
	<br>
	<textarea name="isikata" id="isikata" style="height:300px; width:450px;">Masukan katanya disini :)</textarea><br>
	<input type="submit" name="submit" value="Cek Kata"></input><br>
	<br>
	<i class="fa fa-github"></i><a href="https://github.com/ohmyputra" target="_blank"> Github <a><i class="fa fa-facebook"></i><a href="https://facebook.com/putragilanq" target="_blank"> Facebook<a>
	<br>
	<br>
	<br></center>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kata = $_POST['isikata'];
  $hasil = str_word_count($kata);
  echo "<center>
<h3>Hasil : $hasil kata.</h3>
</center>"; } ?>
</body>
</html>
