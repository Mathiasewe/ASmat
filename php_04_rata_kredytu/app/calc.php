<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

// 1. pobranie parametrów
function getParams(&$form){
	$form['kwota'] = isset($_REQUEST ['kwota']) ? $_REQUEST['kwota'] : null;
	$form['liczba_lat'] = isset($_REQUEST ['liczba_lat']) ? $_REQUEST['liczba_lat'] : null;
	$form['oprocentowanie'] = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['kwota']) && isset($form['liczba_lat']) && isset($form['oprocentowanie']))) return false;
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty';

if ( $form['liczba_lat'] == "") $msgs [] = 'Nie podano liczby lat';

if ( $form['oprocentowanie'] == "") $msgs [] = 'Nie podano oprocentowania';

	if ( count($msgs)==0 ) {
if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota nie jest liczbą';
if (! is_numeric( $form['liczba_lat'] )) $msgs [] = 'Liczba lat nie jest liczbą';
if (! is_numeric( $form['oprocentowanie'] )) $msgs [] = 'Oprocentowanie nie jest liczbą';
}
	
	if (count($msgs)>0) return false;
	else return true;
}


function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
// 3. wykonaj zadanie jeśli wszystko w porządku

//if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int i float
	$form['kwota'] = intval($form['kwota']);
	$form['liczba_lat'] = intval($form['liczba_lat']);
	$form['oprocentowanie'] = floatval($form['oprocentowanie']);
	
	//wykonanie operacji
	$obliczenia = $form['kwota'] * (1 + $form['oprocentowanie']/100 * $form['liczba_lat']) / ($form['liczba_lat'] * 12);
	$result = round($obliczenia, 2);

}

//definicja zmiennych kontrolera
$form  = null;
$obliczenia = null;
$result = null;
$hide_intro = false;
$infos = array();
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ) { // gdy brak błędów
	process($form,$infos,$messages,$result);
}

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);
$smarty->assign('obliczenia',$obliczenia);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');

