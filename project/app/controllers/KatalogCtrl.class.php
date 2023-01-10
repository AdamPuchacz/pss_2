<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class katalogCtrl {
    
    public function action_katalog() {
        $cars = App::getDB()->select("katalog", "*");

        App::getSmarty()->assign("cars",$cars);
        App::getSmarty()->display("Katalog.tpl");
    }
}
