<?php
 	session_start();
	$user=$_POST['user']; // login z formularza
	$pass=$_POST['pass']; // hasło z formularza
	$link = mysqli_connect('lukasz-zdunowski.com.pl', '25509958_lab8' ,'zaq12wsx', '25509958_lab8'); // połączenie z BD – wpisać swoje parametry !!!
	if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
	mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków

	$result = mysqli_query($link, "SELECT * FROM admin WHERE login='$user'"); // pobranie z BD wiersza, w którym login=login z formularza
	$rekord = mysqli_fetch_array($result); // wiersza z BD, struktura zmiennej jak w BD
	if(!$rekord) //Jeśli brak, to nie ma użytkownika o podanym loginie
	{
			mysqli_close($link); // zamknięcie połączenia z BD
			echo "Brak użytkownika o takim loginie !"; // UWAGA nie wyświetlamy takich podpowiedzi dla hakerów
		}
		else
		{ // Jeśli $rekord istnieje
			if($rekord['haslo']==$pass) // czy hasło zgadza się z BD
		{		
				$_SESSION['logged'] = true; 	// wskazuje ze jestesmy zalogowani
				$_SESSION['user'] = $wiersz['nick'];
				header("Location: ./admin/index.php");
		}
		else
		{
			mysqli_close($link);
			echo "Błąd w haśle !"; // UWAGA nie wyświetlamy takich podpowiedzi dla hakerów
		}
	}
?>
