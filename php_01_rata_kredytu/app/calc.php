<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST ['kwota'];
$liczba_lat = $_REQUEST ['liczba_lat'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($liczba_lat) && isset($oprocentowanie))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
if (empty( $messages )) {
	
	// sprawdzenie, czy $kwota, $liczba_lat i $oprocentowanie są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $liczba_lat )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int i float
	$kwota = intval($kwota);
	$liczba_lat = intval($liczba_lat);
	$oprocentowanie = floatval($oprocentowanie);
	
	//wykonanie operacji
	$result = $kwota * (1 + $oprocentowanie/100 * $liczba_lat) / ($liczba_lat * 12);
	$zaokraglona = round($result, 2);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$liczba_lat,$oprocentowanie,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';