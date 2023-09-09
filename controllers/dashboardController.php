<?php
$nbreRvn = count(rvNouveau());
$nbreRvA = count(rvApprouve());
$nbreRvR = count(rvRejet());
$nbreRv = count(rvTotal());
require_once("views/dashboard.php");
