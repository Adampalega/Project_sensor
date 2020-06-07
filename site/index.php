<?php
//  display_errors  // display_startup_errors // Wyswietlanie wyszystkich bledow...
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Pliki konfiguracyjne
require_once ('config.php'); // Polaczenie z baza danych, sciezka do plikow itp...



// Generujemy strone
include ('action/_meta.php'); // Zalaczamy meta dane strony...
include ('action/_navbar.php'); // Zalaczamy nawigacje strony...

// Tutaj robimy sobie akcje dostepne w naszej aplikacji...
$action = !empty($_REQUEST['a']) ? $_REQUEST['a'] : 'dashboard'; //jak nie ma akcji, to domyślnie będzie to moduł "dashboard"
$action = basename($action); //zabezpieczenie by nam nikt nie próbował wcisnąć ścieżki do jakiegoś pliku

// Mozemy sobie zrobic if i sprawdzic czy jest ktos zalogowany czy nie... jesli nie jest zalogowany to przypisujemy mu akcje login $action= 'login'; i w nim plik do logowania...

$availableAction = array('dashboard','charts','userdata','statistics','wysylka'); //lista dostępnych akcji...
if (!in_array($action, $availableAction)){
	die('Podałeś akcje, który nie istnieje w naszej aplikacji'); //tu oczywiście można zrobić ładniej i przekierować usera na stronę błędu
}
else
{
	include ('action/'.$action.'.php'); // Zalaczamy akcje naszej strony..

}


// Zalaczamy stopke strony...
include ('action/_footer.php'); 

?>