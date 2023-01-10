<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homePage'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('homePage', 'HomePageCtrl');
Utils::addRoute('katalog', 'KatalogCtrl');
Utils::addRoute('vouchery', 'VoucheryCtrl');
Utils::addRoute('koszyk', 'KoszykCtrl');
Utils::addRoute('rezerwacja', 'RezerwacjaCtrl');
Utils::addRoute('kontakt', 'KontaktCtrl');
Utils::addRoute('about', 'AboutCtrl');
Utils::addRouteEx('rezerwacja/rezerwuj', null, 'RezerwacjaCtrl', 'Rezerwuj');
Utils::addRouteEx('rezerwacja/typ', null, 'RezerwacjaCtrl', 'TYP');
Utils::addRoute('car', 'CarCtrl');
Utils::addRoute('logowanie', 'loginCtrl');
Utils::addRouteEx('zaloguj', null, 'loginCtrl', 'zaloguj');
Utils::addRouteEx('wyloguj', null, 'loginCtrl', 'wyloguj');
Utils::addRoute('rezerwacje', 'mojeRezerwacjeCtrl');
//Utils::addRoute('action_name', 'controller_class_name');