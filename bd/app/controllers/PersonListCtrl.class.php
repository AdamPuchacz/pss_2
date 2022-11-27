<?php

namespace app\controllers;

use app\forms\PersonSearchForm;
use PDOException;

class PersonListCtrl {

	private $form; //dane formularza wyszukiwania
	private $records; //rekordy pobrane z bazy danych

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonSearchForm();
	}
		
	public function validate() {
		// 1. sprawdzenie, czy parametry zostały przekazane
		// - nie trzeba sprawdzać
		$this->form->wynik = getFromRequest('sf_wynik');
	
		// 2. sprawdzenie poprawności przekazanych parametrów
		// - nie trzeba sprawdzać
		
		return ! getMessages()->isError();
	}
	
	public function action_personList(){
		// 1. Walidacja danych formularza (z pobraniem)
		// - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
		//   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
		//   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
		$this->validate();
		
		// 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
		$search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
		if ( isset($this->form->wynik) && strlen($this->form->wynik) > 0) {
			$search_params['wynik[~]'] = $this->form->wynik.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		
		// 3. Pobranie listy rekordów z bazy danych
		// W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
		// Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
		
		//przygotowanie frazy where na wypadek większej liczby parametrów
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		//dodanie frazy sortującej po wyniku
		$where ["ORDER"] = "wynik";
		//wykonanie zapytania
		
	
		try{
			$this->records = getDB()->select("wynik", [
					"id_wynik",
					"wynik",
					"procent",
					"lata",
					"kwota"
				], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		
		// 4. wygeneruj widok
		getSmarty()->assign('searchForm',$this->form); // dane formularza (wyszukiwania w tym wypadku)
		getSmarty()->assign('people',$this->records);  // lista rekordów z bazy danych
		getSmarty()->display('PersonList.tpl');
	}
	
}
