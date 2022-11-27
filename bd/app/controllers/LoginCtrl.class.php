<?php

namespace app\controllers;

use app\forms\LoginForm;

class LoginCtrl{
	private $form;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
	}
		
	public function validate() {
		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');

		//nie ma sensu walidować dalej, gdy brak parametrów
		if (!isset($this->form->login)) return false;
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if (empty($this->form->login)) {
			getMessages()->addError('Nie podano loginu');
		}
		if (empty($this->form->pass)) {
			getMessages()->addError('Nie podano hasła');
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		if (getMessages()->isError()) return false;
		
		// sprawdzenie, czy dane logowania poprawne
		// (takie informacje najczęściej przechowuje się w bazie danych)
		if ($this->form->login == "admin" && $this->form->pass == "admin") {
			addRole('admin');
		} else if ($this->form->login == "user" && $this->form->pass == "user") {
			addRole('user');
		} else {
			getMessages()->addError('Niepoprawny login lub hasło');
		}
		
		return ! getMessages()->isError();
	}

	public function action_loginShow(){
		$this->generateView(); 
	}
	
	public function action_login(){
		if ($this->validate()){
			//zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
			getMessages()->addError('Poprawnie zalogowano do systemu');
			redirectTo("personList");
		} else {
			//niezalogowany => pozostań na stronie logowania
			$this->generateView(); 
		}		
	}
	
	public function action_logout(){
		// 1. zakończenie sesji
		session_destroy();
		// 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
		redirectTo('personList');
	}	
	
	public function generateView(){
		getSmarty()->assign('form',$this->form); // dane formularza do widoku
		getSmarty()->display('LoginView.tpl');		
	}
}