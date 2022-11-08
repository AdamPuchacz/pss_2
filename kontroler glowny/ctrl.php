<?php
require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Nowością jest sama klasa ClassLoader oraz utworzenie obiektu tej klasy w skrypcie init z dostępem jak dla
// wcześniejszych obiekkót za pomocą funkcji getLoader(). Pozwala ona automatycznie załadować klasy umieszczone
// w głównym folderze aplikacji - w podfolderach zgodnie z ich przestrzeniami nazw (które są częścią pełnej nazwy klasy).

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app

switch ($action) {
	default : // 'calcView'
		// utwórz obiekt i uzyj
		// (autoloader sam załaduje plik na podstawie przestrzeni nazw względem folderu głównego aplikacji)
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
	case 'action1' :
		// zrób coś innego ...
		print('hello');
	break;
	case 'action2' :
		// zrób coś innego ...
		print('goodbye');
	break;
}
