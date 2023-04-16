<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class HomePageCtrl {
    
    public function action_homePage() {
        // $banner = App::getDB()->select("katalog", "*");
        $banner = App::getDB()->query("SELECT * FROM katalog limit 3;")->fetchAll();
        App::getSmarty()->assign("banners", $banner);
        App::getSmarty()->display("HomePage.tpl");
    }
}
