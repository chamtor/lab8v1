
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
    <meta http-equiv="refresh" content="1000" /> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript"></script>
       <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script> 
    <title>Zdunowski</title>


</head>

<body>

<div id="naglowek">
     <img id="zdjecieTlo" src="img.jpg"></img>

</div>
    <div id="main">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="http://www.lukasz-zdunowski.com.pl/lab8x/admin/index.php">Strona głowna</a>
  <a href="kontakt.php">Kontakt</a>
    <a href="mapa.php">Jak do nas dotrzeć</a>
    <a href="oferta.php">Oferta</a>
    <a href="chatbot.php">Chatbot</a>
    <a href="logout.php">Wyloguj</a>

</div>

<!--<span onclick="openNav()">open</span>-->
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  Menu</span>


<textarea name="content" id="editor">
<div id="srodek">

<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6769.15268386663!2d18.13265796358737!3d53.14148416478255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x0%3A0x7fe9734c971bc25b!2sUniwersytet+Technologiczno%E2%80%A6!3m2!1d53.1420294!2d18.1325225!5e0!3m2!1spl!2spl!4v1512854863469" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
</textarea>

</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
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