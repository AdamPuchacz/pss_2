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

        // $res = App::getDB()->select("reservations", "*", [
        //     "user_id" => $_SESSION['user_id']
        // ]);
        
        $res = App::getDB()->query("SELECT r.res_id, k.car_id, r.city, r.collectDate, r.returnDate, r.name, r.phone, r.email, r.payment, r.user_id, r.token, r.createDate,
        k.name as 'car_name', cb.brand_name
        FROM reservations r
        JOIN katalog k ON r.car_id = k.car_id
        JOIN car_brand cb ON k.id_car_brand = cb.id_car_brand
        WHERE r.user_id = ".$_SESSION['user_id'].";")->fetchAll();

        App::getSmarty()->assign("res",$res);
        App::getSmarty()->display("Rezerwacje.tpl");
    }
}
