
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
    <meta http-equiv="refresh" content="1000" /> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" ></script>
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

  <h1> Nasza strone oferuje oferty xyz...</h1>

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