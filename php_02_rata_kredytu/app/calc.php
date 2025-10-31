<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów
function getParams(&$kwota,&$liczba_lat,&$oprocentowanie){
	$kwota = isset($_REQUEST ['kwota']) ? $_REQUEST['kwota'] : null;
	$liczba_lat = isset($_REQUEST ['liczba_lat']) ? $_REQUEST['liczba_lat'] : null;
	$oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$liczba_lat,&$oprocentowanie,&$messages){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($liczba_lat) && isset($oprocentowanie))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $liczba_lat == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $kwota, $liczba_lat i $oprocentowanie są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $liczba_lat )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	
	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$liczba_lat,&$oprocentowanie,&$messages,&$result){
	global $role;
	
// 3. wykonaj zadanie jeśli wszystko w porządku

//if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int i float
	$kwota = intval($kwota);
	$liczba_lat = intval($liczba_lat);
	$oprocentowanie = floatval($oprocentowanie);
	
	//wykonanie operacji
	if ($role == 'admin'){
		$obliczenia = $kwota * (1 + $oprocentowanie/100 * $liczba_lat) / ($liczba_lat * 12);
		$result = round($obliczenia, 2);
	} else {
		$messages [] = 'Tylko administrator może odejmować !';
	}
}

//definicja zmiennych kontrolera
$kwotakwota = null;
$liczba_lat = null;
$oprocentowanie = null;
$obliczenia = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$liczba_lat,$oprocentowanie);
if ( validate($kwota,$liczba_lat,$oprocentowanie,$messages) ) { // gdy brak błędów
	process($kwota,$liczba_lat,$oprocentowanie,$messages,$result,$obliczenia);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$liczba_lat,$oprocentowanie,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';