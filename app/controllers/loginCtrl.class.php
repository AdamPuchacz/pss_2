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
        $user = App::getDB()->query("SELECT u.user_id, u.login, u.pass, r.id_role, r.role_name 
        FROM users u JOIN roles r ON u.id_role = r.id_role 
        WHERE u.login = '".$_POST['login']."' and u.pass = '".$_POST['pass']."';")->fetchAll();

        if(count($user) == 1) {
            \core\RoleUtils::addRole('loggedIn');
            $_SESSION['user_id'] = $user[0]['user_id'];
            if ($user[0]['id_role'] == 1) {
                \core\RoleUtils::addRole('isAdmin');
                $_SESSION['is_admin'] = true;
            } else {
                $_SESSION['is_admin'] = false;
            }
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
