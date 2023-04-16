<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class AboutCtrl {
    
    public function action_About() {
        App::getSmarty()->display("About.tpl");
    }
}
