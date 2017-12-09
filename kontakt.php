<?php
session_start();
session_unset();
?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
    <meta http-equiv="refresh" content="1000" /> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript"></script>
      
    <title>Zdunowski</title>


</head>

<body>
<div id="naglowek">
	<img src="img.jpg">
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://www.lukasz-zdunowski.com.pl/lab8">Strona głowna</a>
  <a href="./kontakt.php">Kontakt</a>
  <a href="./mapa.php">Jak do nas dotrzeć</a>
  <a href="./oferta.php">Oferta</a>
  <a href="./chatbot.php">Chatbot</a>
</div>

<!--<span onclick="openNav()">open</span>-->
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Menu</span>



<div id="srodek">

<?php


$link = mysqli_connect('lukasz-zdunowski.com.pl', '25509958_lab8' ,'zaq12wsx', '25509958_lab8');//połączenie z BD – wpisać swoje parametry !!!
if(!$link) { 
    echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); 
}//obsługa błędu połączenia z BD
mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków

$result = mysqli_query($link, "SELECT * FROM kontakt"); //

while ($wiersz = mysqli_fetch_array ($result))
{      
    $nazwa = $wiersz['nazwa'];
    $adres = $wiersz['adres'];
    $telefon = $wiersz['telefon'];
    $email = $wiersz['email'];
}

echo $nazwa.'<br>';
echo $adres.'<br>';
echo $telefon.'<br>';
echo $email.'<br>';

?>

</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>