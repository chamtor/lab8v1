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

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11383.73272198169!2d18.12683530730508!3d53.14367150919122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1512481715072" width="100%" height="90%" frameborder="0" style="border:0" allowfullscreen></iframe>

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