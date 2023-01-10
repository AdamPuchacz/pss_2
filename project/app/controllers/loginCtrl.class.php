<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class loginCtrl {
    
    public function action_logowanie() {
        App::getSmarty()->assign("error","");
	    App::getSmarty()->display("logowanie.tpl");
    }

    public function zaloguj() {
        //TODO: password encryption and error display
        $user = App::getDB()->select("users", "*",[
            "login" => $_POST['login'],
            "pass" => $_POST['pass']
        ]);

        if(count($user) == 1) {
            \core\RoleUtils::addRole('loggedIn');
            $_SESSION['user_id'] = $user[0]['user_id'];
            $_SESSION['is_admin'] = $user[0]['is_admin'] == 1 ? true : false;
            header('Location: '.App::getConf()->app_root);
        } else {
            App::getSmarty()->assign("error","Błędne dane logowanie");
            App::getSmarty()->display("logowanie.tpl");
        }
    }

    public function wyloguj() {
        session_destroy();
        header('Location: '.App::getConf()->app_root);
    }
    
}
