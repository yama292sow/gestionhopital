<?php

if (isset($_POST['connecter'])) {
    extract($_POST);
    $user = connexion($email, $mdp);
    if ($user) {
        $_SESSION['user'] = $user;
        return header("Location:?page=acceuil");
    } else {
        return header("Location:?page=login");
    }
}


require_once('views/connexion.php');
