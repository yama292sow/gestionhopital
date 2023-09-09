<?php


$docteurs = getAllDocteur();

if (isset($_GET["delete"])) {
    if (deleteDocteur($_GET["delete"])) {
        return header("Location:?page=docteur");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if (editDocteur($id, $nom, $specialisation, $tel, $email)) {
        return header("Location:?page=docteur");
    }
}

if (isset($_POST['ajouter'])) {
    extract($_POST);
    if (addDocteur($nom, $specialisation, $tel, $email, "passer123")) {
        return header("Location:?page=docteur");
    }
}

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $d = getDocteurById($_GET["id"]);
    }
    require_once("views/ajoutDocteur.php");
} else {
    require_once("views/docteur.php");
}
