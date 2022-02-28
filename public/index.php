<?php
//Demarrage de la sesion s'il n'est pas allumée
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// show errors when there's 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//inclusion des constantes
require_once dirname(dirname(__FILE__)) . "/config/constantes.php";

//inclusion du Validator
require_once dirname(dirname(__FILE__)) . "/config/validator.php";

//inclusion de l'orm tout ce qui est en rapport avec les données
require_once dirname(dirname(__FILE__)) . "/config/orm.php";

//inclusion des roles
require_once dirname(dirname(__FILE__)) . "/config/role.php";

//Chargement du router
require_once dirname(dirname(__FILE__)) . "/config/router.php";
/*
**tester les variables declarer
*/