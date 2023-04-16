<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class CarCtrl {
    
    public function action_car() {
        $id = explode('/', $_SERVER['REQUEST_URI'])[4];        
        // $car = App::getDB()->select("katalog", "*", [
        //     "car_id" => $id
        // ]);
        $car = App::getDB()->query("SELECT k.car_id, k.name, k.image, k.price, k.horse_power, k.v_max, k.fuel, k.engine, cb.brand_name, ct.type_name
        FROM katalog k
        JOIN car_brand cb ON k.id_car_brand = cb.id_car_brand
        JOIN car_type ct ON k.id_car_type = ct.id_car_type
        WHERE k.car_id = ".$id.";")->fetchAll();

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
