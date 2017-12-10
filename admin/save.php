<?php
$link = mysqli_connect('lukasz-zdunowski.com.pl', '25509958_lab8' ,'zaq12wsx', '25509958_lab8'); // połączenie z BD – wpisać swoje parametry !!!
if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków

$name = $_POST['name'];


echo $name;


$q = "SELECT * FROM informacje WHERE punkt='sglowna'";
$sql = mysqli_query($link, $q) or die (mysqli_error($link));
$row_cnt = mysqli_num_rows($sql);

if($row_cnt >=1){
   // $rezultat = mysqli_query($link, $sql) or die(mysqli_error($link));
    if ($row = $sql->fetch_assoc()) {                                           
       $asd= $row['opis'];
    }
  }
    echo '<h1>'.$asd.'</h1>'
?>