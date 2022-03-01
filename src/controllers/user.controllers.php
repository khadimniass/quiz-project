<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['action'])) {
        if ($_REQUEST['action'] == "connexion") {
        }
    }
}

// if ($_SERVER['REQUEST_METHOD'] == "GET") {
//     if (isset($_REQUEST['action'])) {
//         if ($_REQUEST['action'] == "accueil") {
//             $first_lien="Dashboard";
//             $sub_lien="Home" ;
//          //chargement des views
//             require_once(PATH_VIEWS . "user".DIRECTORY_SEPARATOR."accueil.html.php");
//         }
//     }
// }

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "accueil") {
            $first_lien = "Dashboard";
            $sub_lien = "Home";
            //Chargement des Vues de Users
            if (isset($_GET['view'])) {
                switch ($variable) {
                    case 'liste.joueur':
                        ob_start();
                        require_once(PATH_VIEWS . "user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
                        $content_for_template = ob_get_clean();
                        break;
                }
            } else {
                ob_start();
                $data = lister_joueur();
                require_once(PATH_VIEWS . "user/liste.joueur.html.php");
                $content_for_template = ob_get_clean();
            }
            require_once(PATH_VIEWS . "user/accueil.html.php");
        }
    }
}

function lister_joueur():array {
    return find_users("ROLE_JOUEUR");
    }
