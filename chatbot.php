<?php
session_start();
session_unset();
?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
    <meta http-equiv="refresh" content="1000" /> 
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script type="text/javascript" ></script>
      
    <title>Zdunowski</title>


</head>

<body>
<div class="naglowek">
     <img id="zdjecieTlo" src="img.jpg"></img>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://www.lukasz-zdunowski.com.pl/lab8x">Strona głowna</a>
  <a href="./kontakt.php">Kontakt</a>
  <a href="./mapa.php">Jak do nas dotrzeć</a>
  <a href="./oferta.php">Oferta</a>
  <a href="./chatbot.php">Chatbot</a>

</div>

<!--<span onclick="openNav()">open</span>-->
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Menu</span>

<div id="srodek">

  <form action="pytanie.php" method="POST">

    
    


  </form>


<?php 
  $user=$_POST['user']; // login z formularza
  $pass=$_POST['pass']; // hasło z formularza
  $_SESSION['user1'] =  $user;
  $link = mysqli_connect('lukasz-zdunowski.com.pl', '25509958_lab7' ,'zaq12wsx', '25509958_lab7'); // połączenie z BD – wpisać swoje parametry !!!
  if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
  mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków

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