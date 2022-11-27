<?php

/** 
 * Inicjalizacja już prawie kompletnego frameworka
 *
 * @author Przemysław Kudłacik
 */

require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php'; //ustaw konfigurację

function &getConf(){
	global $conf; return $conf;
}

require_once 'core/Messages.class.php'; //załaduj i stwórz Messages
$msgs = new core\Messages();
function &getMessages(){
	global $msgs; return $msgs;
}

require_once 'core/ClassLoader.class.php'; //załaduj i stwórz loader klas
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader; return $cloader;
}

require_once 'core/Router.class.php'; //załaduj i stwórz router
$router = new core\Router();
function &getRouter() {
    global $router; return $router;
}

$smarty = null;	//przygotuj Smarty, twórz tylko raz - wtedy kiedy potrzeba
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		//stwórz Smarty
		include_once 'lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		//przypisz konfigurację i messages
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		//zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy odwoływaniu do nich)
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

$db = null; //przygotuj Medoo, twórz tylko raz - wtedy kiedy potrzeba
function &getDB() {
    global $conf, $db;
    if (!isset($db)) {
        require_once 'lib/medoo/Medoo.php';
        $db = new \Medoo\Medoo([
            'database_type' => &$conf->db_type,
            'server' => &$conf->db_server,
            'database_name' => &$conf->db_name,
            'username' => &$conf->db_user,
            'password' => &$conf->db_pass,
            'charset' => &$conf->db_charset,
            'port' => &$conf->db_port,
            'prefix' => &$conf->db_prefix,
            'option' => &$conf->db_option
        ]);
    }
    return $db;
}

require_once 'core/functions.php';

session_start(); //uruchom lub kontynuuj sesję
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );