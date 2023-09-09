<?php
if (isset($_GET["profil"])) {

    $doc = selectDocteurByMdp($id, $mdp);
}
if (isset($_POST["modifier"])) {
    extract($_POST);
    if (selectDocteurByMdp($_SESSION['user']->idDocteur, $mdp_anc)) {
        if (editDocteurByMdp($_SESSION['user']->idDocteur, $mdp)) {
        }
    }
}
if (isset($_POST["modifie"])) {
    extract($_POST);
    if (editDocteur($_SESSION['user']->idDocteur, $nom, $specialisation, $tel, $email)) {
        $_SESSION['user'] = getDocteurById($_SESSION['user']->idDocteur);
        return header("Location:?page=docteur");
    }
}
require_once('views/profil.php');
