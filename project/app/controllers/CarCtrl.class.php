<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class CarCtrl {
    
    public function action_car() {
        $id = explode('/', $_SERVER['REQUEST_URI'])[4];        
        $car = App::getDB()->select("katalog", "*", [
            "car_id" => $id
        ]);

        if (empty($car)) {
            App::getSmarty()->assign("error",[
                "code" => "404",
                "message" => "Nie znaleziono pojazdu z id: ".$id
            ]);
            App::getSmarty()->display("404.tpl");
        } else {
            App::getSmarty()->assign("car",$car[0]);
            App::getSmarty()->display("Car.tpl");
        } 
    }
}
