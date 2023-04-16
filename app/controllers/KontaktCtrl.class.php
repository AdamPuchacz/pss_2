<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class KontaktCtrl {
    
    public function action_Kontakt() {
        App::getSmarty()->display("Kontakt.tpl");
    }
}
