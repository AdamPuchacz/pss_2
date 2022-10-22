<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = $_REQUEST['kwota'];
$procent = $_REQUEST['procent'];
$lata = $_REQUEST['lata'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($procent) && isset($lata))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
if (empty( $messages )) {
	
	// sprawdzenie, czy $kwota i $procent są liczbami całkowitymi
	if (! is_numeric( $kwota ) || $kwota <= 0) {
		$messages [] = 'kwota jest nie poprawna';
	}
	
	if (! is_numeric( $procent ) || $procent < 0) {
		$messages [] = 'procent jest nie poprawny';
	}	

	if (! is_numeric( $lata ) || $lata <= 0 ) {
		$messages [] = 'ilośc lat jest nie poprawna';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
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

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$procent,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';