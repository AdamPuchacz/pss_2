<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class RezerwacjaCtrl {
    
    public function action_Rezerwacja() {
        if (isset($_GET['car'])) {
            $car = App::getDB()->query("SELECT k.car_id, k.name, k.price, cb.brand_name
            FROM katalog k
            JOIN car_brand cb ON k.id_car_brand = cb.id_car_brand
            JOIN car_type ct ON k.id_car_type = ct.id_car_type
            WHERE k.car_id = ".$_GET['car'].";")->fetchAll();
            // $car = App::getDB()->select("katalog", "*", [
            //     "car_id" => $_GET['car']
            // ]);
            App::getSmarty()->assign("car",$car[0]);
            App::getSmarty()->display("Rezerwacja.tpl");
        } else {
            header('Location: '.App::getConf()->app_root);
        }
    }

    public function Rezerwuj() {

        function generateToken() {
            $characters = '0123456789';
            $token = '';

            for ($i = 0; $i < 10; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $token .= $characters[$index];
            }
            
            return $token;
        }

        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        App::getDB()->insert("reservations",[
            "car_id" => $_POST['car_id'],
            "total_price" => $_POST['car_price'],
            "city" => $_POST['city'],
            "collectDate" => $_POST['collectDate'],
            "returnDate" => $_POST['returnDate'],
            "name" => $_POST['name'],
            "phone" => $_POST['phone'],
            "email" => $_POST['email'],
            "payment" => $_POST['payment'],
            "token" => generateToken(),
            "user_id" => $user_id
        ]);

        $res_id = App::getDB()->id();
        header('Location: '.App::getConf()->app_root.'/rezerwacja/typ/'.$res_id.'?token='.$token);
    }
    
    public function TYP() {
        // $res = App::getDB()->select("reservations", "*",[
        //     "res_id" => intval(explode('/', $_SERVER['REQUEST_URI'])[5])
        // ]);

        $id = intval(explode('/', $_SERVER['REQUEST_URI'])[5]);

        $res = App::getDB()->query("select r.res_id, r.total_price, r.city, r.collectDate, r.returnDate, r.name, r.phone, r.email, r.payment, r.user_id, r.token, k.car_id, k.name as 'car_name', cb.brand_name 
        from reservations r 
        join katalog k on r.car_id = k.car_id 
        join car_brand cb on k.id_car_brand = cb.id_car_brand
        where r.res_id = ".$id)->fetchAll();
        $notFound = false;
        $token = isset($_GET['token']) ? $_GET['token'] : null;

        if (empty($res)) { //reservation with passed id does not exists
            $notFound = true;
        } else {
            if (isset($_SESSION['user_id'])) { //if the user is logged in
                //if the reservation was made using other user account
                if ($res[0]['user_id'] != $_SESSION['user_id']) $notFound = true;
                //allow view for admin
                if ($_SESSION['is_admin']) $notFound = false;
            } else { //if the user is NOT logged in
                //if the reservation was made using a user account
                if ($res[0]['user_id'] != null) $notFound = true;
                //if the passed token in query does not match
                if ($token != $res[0]['token']) $notFound = true;
            }
        }
        
        //display error page
        if ($notFound) {
            App::getSmarty()->assign("error",[
                "code" => "404",
                "message" => "Nie znaleziono rezerwacji"
            ]);
            App::getSmarty()->display("404.tpl");
            return;
        }
        
        $res = $res[0];

        //calculate the diffrence between dates in days
        $datediff = strtotime($res['returnDate']) - strtotime($res['collectDate']);
        $datediff = round($datediff / (60 * 60 * 24));
        App::getSmarty()->assign("res",$res);
        App::getSmarty()->assign("days",$datediff);

        App::getSmarty()->display("TYP.tpl");
    }
}
