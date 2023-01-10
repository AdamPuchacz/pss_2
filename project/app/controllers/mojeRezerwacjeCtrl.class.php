<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class mojeRezerwacjeCtrl {
    
    public function action_rezerwacje() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: '.App::getConf()->app_root);
            return;
        }

        $res = App::getDB()->select("reservations", "*", [
            "user_id" => $_SESSION['user_id']
        ]);

        App::getSmarty()->assign("res",$res);
        App::getSmarty()->display("Rezerwacje.tpl");
    }
}
