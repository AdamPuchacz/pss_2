<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class HomePageCtrl {
    
    public function action_homePage() {
        App::getSmarty()->display("HomePage.tpl");
    }
}
