<?php

namespace app\controllers;

use app\forms\PersonEditForm;
use DateTime;
use PDOException;

class PersonEditCtrl {

	private $form; //dane formularza

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonEditForm();
	}

	//validacja danych przed zapisem (nowe dane lub edycja)
	public function validateSave() {
		$this->form->kwota = getFromRequest('kwota',true,'Brakuje kwoty');
		$this->form->procent = getFromRequest('procent',true,'Brakuje procentu');
		$this->form->lata = getFromRequest('lata',true,'Brakuje ilosci lat');

				// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->procent ) && isset ( $this->form->lata ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->procent == "") {
			getMessages()->addError('Nie podano procentu');
		}
		if ($this->form->lata == "") {
			getMessages()->addError('Nie podano ilości lat');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->kwota ) || $this->form->kwota <= 0) {
				getMessages()->addError('Nieprawidłowa kwota kredytu');
			}
			
			if (! is_numeric ( $this->form->procent ) || $this->form->procent < 0) {
				getMessages()->addError('Nieprawidłowy procent');
			}
			
			if (! is_numeric ( $this->form->lata ) || $this->form->lata <= 0) {
				getMessages()->addError('Ilośc lat jest nie poprawna');
			}
		}
		
		return ! getMessages()->isError();
	}

	//validacja danych przed wyswietleniem do edycji
	public function validateEdit() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
	
	public function action_personNew(){
		$this->generateView();
	}
	
	//wysiweltenie rekordu do edycji wskazanego parametrem 'id'
	public function action_personEdit(){
		// 1. walidacja id osoby do edycji
		if ( $this->validateEdit() ){
			try {
				// 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
				$record = getDB()->get("wynik", "*",[
					"id_wynik" => $this->form->id
				]);
				// 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
				$this->form->id = $record['id_wynik'];
				$this->form->wynik = $record['wynik'];
				$this->form->procent = $record['procent'];
				$this->form->lata = $record['lata'];
				$this->form->kwota = $record['kwota'];
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas odczytu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		} 
		
		// 3. Wygenerowanie widoku
		$this->generateView();		
	}

	public function action_personDelete(){		
		// 1. walidacja id osoby do usuniecia
		if ( $this->validateEdit() ){
			
			try{
				// 2. usunięcie rekordu
				getDB()->delete("wynik",[
					"id_wynik" => $this->form->id
				]);
				getMessages()->addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		}
		
		// 3. Przekierowanie na stronę listy osób
		forwardTo('personList');		
	}

	public function calc(){

		$this->form->kwota = intval($this->form->kwota);
		$this->form->procent = intval($this->form->procent);
		$this->form->lata = intval($this->form->lata);
		getMessages()->addInfo('Parametry poprawne.');
			
		//wykonanie operacji
		
				if (!inRole('admin') && $this->form->kwota > 10000) {
					getMessages()->addError('Tylko administrator może wykonać tę operację');
				} else {
					$msc = $this->form->lata * 12;
					$mscp = ($this->form->procent / 100);
					$result = ($this->form->kwota/$msc) + (($this->form->kwota/$msc)*$mscp);
					$result = round($result, 2);
					if($result < 1) {
						$result = 0;
					}
					$this->form->wynik = $result;
				}
		
		
		getMessages()->addInfo('Wykonano obliczenia.');
	}
	

	public function action_personSave(){
			
		// 1. Walidacja danych formularza (z pobraniem)
		if ($this->validateSave()) {
			// 2. Zapis danych w bazie
			try {
				$this->calc();
				//2.1 Nowy rekord
				if ($this->form->id == '') {
					//sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
					$count = getDB()->count("wynik");
					if ($count <= 20) {
						getDB()->insert("wynik", [
							"wynik" => $this->form->wynik,
							"procent" => $this->form->procent,
							"lata" => $this->form->lata,
							"kwota" => $this->form->kwota
						]);
						$this->form->id_wynik = getDB()->id();
					} else { //za dużo rekordów
						// Gdy za dużo rekordów to pozostań na stronie
						getMessages()->addInfo('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
						$this->generateView(); //pozostań na stronie edycji
						exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
					}
				} else { 
				//2.2 Edycja rekordu o danym ID
					getDB()->update("wynik", [
						"wynik" => $this->form->wynik,
						"procent" => $this->form->procent,
						"lata" => $this->form->lata,
						"kwota" => $this->form->kwota
					], [ 
						"id_wynik" => $this->form->id
					]);
				}
				getMessages()->addInfo('Pomyślnie zapisano rekord');

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			
			// 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			forwardTo('personList');

		} else {
			// 3c. Gdy błąd walidacji to pozostań na stronie
			$this->generateView();
		}		
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form); // dane formularza dla widoku
		getSmarty()->display('PersonEdit.tpl');
	}
}
 