<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota,&$procent,&$lata){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$procent,&$lata,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($procent) && isset($lata))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $procent == "") {
		$messages [] = 'Nie podano procentu kredytu';
	}
	if ( $lata == "") {
		$messages [] = 'Nie podano ilości lat';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $kwota i $procent i są liczbami całkowitymi
	if (! is_numeric( $kwota ) || $kwota <= 0) {
		$messages [] = 'kwota jest nie poprawna';
	} else {
		if ($_SESSION['role'] != 'admin' && $kwota > 10000) {
			$messages [] = 'nie można obliczyć takiej kwoty';
		}
	}
	
	if (! is_numeric( $procent ) || $procent < 0) {
		$messages [] = 'procent jest nie poprawny';
	}	

	if (! is_numeric( $lata ) || $lata <= 0 ) {
		$messages [] = 'ilośc lat jest nie poprawna';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$procent,&$lata,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$procent = intval($procent);
	$lata = intval($lata);
	$msc = $lata * 12;
	$mscp = ($procent / 100);
	$result = ($kwota/$msc) + (($kwota/$msc)*$mscp);
	$result = round($result, 2);

	if($result < 1) {
		$result = "za darmo!";
	}
}

//definicja zmiennych kontrolera
$kwota = null;
$procent = null;
$lata = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$procent,$lata);
if ( validate($kwota,$procent,$lata,$messages) ) { // gdy brak błędów
	process($kwota,$procent,$lata,$messages,$result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$procent,$lata,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';