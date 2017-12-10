<?php
session_start();
?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
    <meta http-equiv="refresh" content="1000" /> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" ></script>
         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
    function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');}</script>
    <title>Zdunowski</title>


</head>

<body>

<div id="naglowek">
  <img id="zdjecieTlo" src="img.jpg"></img>
</div>
<div id="main">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://www.lukasz-zdunowski.com.pl/lab8x">Strona głowna</a>
  <a href="./kontakt.php">Kontakt</a>
  <a href="./mapa.php">Jak do nas dotrzeć</a>
  <a href="./oferta.php">Oferta</a>
  <a href="./chatbot.php">Chatbot</a>
  <a href="./admin.php">Panel Administratora</a>
  <a id="google_translate_element"></a>




</div>

<!--<span onclick="openNav()">open</span>-->
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  Menu</span>

<div id="srodek">

  <form  method="POST">
      <input type="text" placeholder="O co chcesz zapytać?" name="zapytanie">
      <input type="submit" value="Submit">
  </form>




<?php 
//$pytanie = $_POST['zapytanie'];
$link = mysqli_connect('lukasz-zdunowski.com.pl', '25509958_lab8' ,'zaq12wsx', '25509958_lab8'); // połączenie z BD – wpisać swoje parametry !!!
if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków
$q = "SELECT * FROM chat WHERE pytanie='".$_POST['zapytanie']."';";
$sql = mysqli_query($link, $q) or die (mysqli_error($link));

if(isset($_POST['zapytanie'])) {
$row = mysqli_fetch_array($sql);
if($row) {
    $odp = $row['odpowiedz'];
  
    echo $odp;
}else{
  echo "A Ty"." ".$_POST['zapytanie']."?";
}}
?> 


<?php
/*$q = "SELECT * FROM chat WHERE pytanie='$pytanie'";
$wynik = mysqli_query($link, $q) or die (mysqli_error($link));

if(isset($_POST['zapytanie'])){
if($wynik=$pytanie){
 if(($wiersz = mysqli_fetch_assoc($wynik)))  { 
  $wynik2 = mysqli_query($link, $wiersz['odpowiedz']);
  echo $wynik2;  
  }
}
else{
  echo "sdada";
}
}
*/








/* if($link!=null){
$wynik = mysqli_query($link, $q) or die (mysqli_error($link));                                                
if(($wiersz = mysqli_fetch_assoc($wynik))!=null){                                     
    $wynik2 = mysqli_query($link, $wiersz['odpowiedz']);                              
        if($wynik2!=false){
          $wiersz2 = mysqli_fetch_row($wynik2);                                         
         echo "A Ty"." ".$pytanie."?";

}
  else{  
   echo $wiersz2['odpowiedz'];                                                                           
    }
  }
  else{                                                                                 
    echo "<p>Niestety nie umiem odpowiedzieć na to pytanie!</p>";                  
  }
}*/

/*if($row_cnt>=1){
if ($row = $sql->fetch_assoc()) {                                           
       $asd= $row['odpowiedz'];
    }
  echo $asd;
} 
else{
    echo "A Ty"." ".$pytanie."?";
}*/

?>

</div>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>