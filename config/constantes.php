<?php

/**
 * Chemin sur dossier racine du projet
 */
define("ROOT", str_replace("public" . DIRECTORY_SEPARATOR . "index.php", "", $_SERVER['SCRIPT_FILENAME']));

/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/

define("PATH_SRC", ROOT . "src" . DIRECTORY_SEPARATOR);

/**
 * Chemin sur dossier templates du projet
*/
define("PATH_VIEWS", ROOT . "templates" . DIRECTORY_SEPARATOR);

/**
 * Chemin sur data qui contient le fichier Json db.json
 */
define("PATH_DB", ROOT . "data/db.json");

/**
 * Chemin sur le dossier public , pour inclusion des images,css et js
 */
define("WEBROOT", str_replace("index.php", "", $_SERVER['SCRIPT_NAME']));


/**
 * Chemin sur l'action des formulaires
*/

/**
 * stockage des erreurs
 */
define("KEY_ERRORS", "errors");

/**
 * cle d'acces a l'utilisateur connecté
 */
define("USER_KEY", "user-connect");




// define("USER_KEY", "user_connect");
define("ROLE_JOUEUR", "ROLE_JOUEUR");
define("ROLE_ADMIN", "ROLE_ADMIN");
/**
 * definir l'URL du projet 
 */
// define("PATH_POST", "http://localhost:8000");


