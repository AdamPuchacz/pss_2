<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class katalogCtrl {
    
    public function action_katalog() {
        if (isset($_GET['page']) && $_GET['page'] != "") {
            $page = intval($_GET['page']);
        }else{
            $page = 1;
        }

        if (isset($_GET['type']) && $_GET['type'] != "") {
            $carType_filter = $_GET['type'];
        }else{
            $carType_filter = null;
        }
        
        $carTypes_query = "SELECT type_name FROM car_type";
        $car_types = App::getDB()->query($carTypes_query)->fetchAll();

        
        $total_results_per_page = 3;
        $offset = ($page-1) * $total_results_per_page;
        $previous_page = $page - 1;
        $next_page = $page + 1;
        $count_query = "SELECT COUNT(*) As total_records FROM `katalog`";

        if($carType_filter != null) {
            $count_query = $count_query." JOIN car_type ON car_type.id_car_type = katalog.id_car_type WHERE car_type.type_name = '".$carType_filter."';";
        }

        $result_count = App::getDB()->query($count_query)->fetchAll();
    
        $total_records = $result_count[0][0];
        $total_no_of_pages = ceil($total_records / $total_results_per_page);
       
        $select_query = "SELECT * FROM `katalog`";

        if($carType_filter != null) {
            $select_query = $select_query." JOIN car_type ON car_type.id_car_type = katalog.id_car_type WHERE car_type.type_name = '".$carType_filter."';";        
        }

        $select_query = $select_query." LIMIT ".$offset.",".$total_results_per_page;
        $cars = App::getDB()->query($select_query)->fetchAll();
        
        App::getSmarty()->assign("cars",$cars);
        App::getSmarty()->assign("total_no_of_pages",$total_no_of_pages);
        App::getSmarty()->assign("current_page",$page);    
        App::getSmarty()->assign("previous_page", $previous_page);
        App::getSmarty()->assign("next_page", $next_page);
        App::getSmarty()->assign("car_types", $car_types);
        if ($carType_filter != null) {
            App::getSmarty()->assign("active_filter", $carType_filter);
        }
        App::getSmarty()->display("Katalog.tpl");
    
    }
}