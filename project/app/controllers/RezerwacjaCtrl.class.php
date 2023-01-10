<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class RezerwacjaCtrl {
    
    public function action_Rezerwacja() {
        if (isset($_GET['car'])) {
            $car = App::getDB()->select("katalog", "*", [
                "car_id" => $_GET['car']
            ]);
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
        $res = App::getDB()->select("reservations", "*",[
            "res_id" => intval(explode('/', $_SERVER['REQUEST_URI'])[5])
        ]);
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
