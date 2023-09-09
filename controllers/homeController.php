<?php
$docteurs = getAllDocteur();
$rv = getAllRev(0);

if (isset($_POST['ajouter'])) {
    extract($_POST);
    //var_dump($_POST);
    if (addRv($nom, $tel, $email, $idDocteur, $daterv, $heure, $message, 0)) {
        // return header("Location:?page=home");
    }
}
$reservation = selectRv(0);
if (isset($_POST["recherche"])) {
    extract($_POST);
    $reservation = selectRv($tel);
} else {
}


require_once('views/home.php');
