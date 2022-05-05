<?php 
//Front controller
//Url localhost:8000

//Chargement Manuel
require_once("../models/User.php");
require_once("../models/RP.php");

 $rp=new RP();
 $rp->setId(1)
     ->setLogin("douvewane")
     ->setPassword("douve");

$rp->setRole("ROLE_AC");
echo $rp->getRole();



