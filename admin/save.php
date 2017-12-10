<?php

$link = mysqli_connect('lukasz-zdunowski.com.pl', '25509958_lab8' ,'zaq12wsx', '25509958_lab8'); // połączenie z BD – wpisać swoje parametry !!!
if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków

$sGlowna = $_POST['glowna'];
$sKontakt = $_POST['kontakt'];
$sOferta = $_POST['oferta'];


$q= "UPDATE informacje set opis='$sGlowna' WHERE punkt='sglowna'";
$sql = mysqli_query($link, $q) or die (mysqli_error($link));

$q= "UPDATE informacje set opis='$sKontakt' WHERE punkt='kontakt'";
$sql = mysqli_query($link, $q) or die (mysqli_error($link));


$q= "UPDATE informacje set opis='$sOferta' WHERE punkt='oferta'";
$sql = mysqli_query($link, $q) or die (mysqli_error($link));
header("Location: ./index.php");

?>