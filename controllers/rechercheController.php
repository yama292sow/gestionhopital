<?php
$rv = selectRv(0);
if (isset($_POST['recherche'])) {
   extract($_POST);
   $rv = selectRv($tel);
}

require_once('views/recherche.php');
