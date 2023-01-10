<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class KoszykCtrl {
    
    public function action_Koszyk() {
        App::getSmarty()->display("Koszyk.tpl");
    }
}
