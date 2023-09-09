<?php
$docteurs = getAllDocteur();



if (isset($_GET["delete"])) {
    if (deleteRv($_GET["delete"])) {
        return header("Location:?page=rv");
    }
}

if (isset($_GET["app"])) {

    if (editRvByStatut($_GET["app"], 1)) {
        $_GET["type"] = "approuves";
    }
}
if (isset($_GET["rejet"])) {

    if (editRvByStatut($_GET["rejet"], 2)) {
        $_GET["type"] = "rejetes";
    }
}

if (isset($_POST['modifier'])) {
    extract($_POST);
    $c = editReservation($id, $nom, $tel, $email, $idDocteur, $daterv, $heure, $message);
    if ($c) {
        if ($v->statut == 0)
            return header("Location:?page=rv&type=nouveaux");
        if ($v->statut == 1)
            return header("Location:?page=rv&type=approuves");
        if ($v->statut == 2)
            return header("Location:?page=rv&type=rejetes");
    }
}

$rv = getAllRev(0);
if (isset($_GET["type"]) && $_GET["type"] == "approuves") {
    $rv = getAllRev(1);
} else if (isset($_GET["type"]) && $_GET["type"] == "rejetes") {
    $rv = getAllRev(2);
} else {
    $rv = getAllRev(0);
}

if (isset($_GET["type"]) && $_GET["type"] == "edit") {
    if (isset($_GET["id"])) {
        $v = getReservationById($_GET["id"]);
    }
    require_once('views/modifierReservation.php');
} else {
    require_once('views/rv.php');
}
