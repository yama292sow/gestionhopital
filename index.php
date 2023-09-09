<?php
session_start();
require_once("models/database.php");
if (isset($_GET["page"])) {

    if (isset($_SESSION['user'])) {

        switch ($_GET["page"]) {

            case 'profil':
                require_once('controllers/profilController.php');
                break;
            case 'recherche':
                require_once("controllers/rechercheController.php");
                break;
            case 'acceuil':
                require_once("controllers/dashboardController.php");
                break;
            case 'docteur':
                require_once('controllers/docteurController.php');
                break;
            case 'rv':
                require_once('controllers/rvController.php');
                break;
            case 'logout':
                require_once('views/logout.php');
                break;
            default:
                require_once('controllers/loginController.php');
                break;
        }
    } else {
        require_once('controllers/loginController.php');
    }
} else {
    require_once('controllers/homeController.php');
}
