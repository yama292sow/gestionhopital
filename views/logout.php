<?php
// var_dump($_SESSION['user']))
// if (isset($_SESSION['user'])) {

unset($_SESSION['user']);
session_destroy();
return header("Location:?page=login");
// }
