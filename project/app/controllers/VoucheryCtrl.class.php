<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class voucheryCtrl {
    
    public function action_vouchery() {
        $vouchers = App::getDB()->select("vouchers", "*");

        App::getSmarty()->assign("vouchers",$vouchers);
        App::getSmarty()->display("Vouchery.tpl");
    }
}
