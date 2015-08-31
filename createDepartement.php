<?php

use sabqan\planifserver\bo\Departement as Departement;
use sabqan\planifserver\bll\DepartementManager as DepartementManager;
require_once('bootstrap.php');

$name = $argv[1];

$manager = new DepartementManager();
$departement = new Departement();

$departement->setName($name);

$manager->save($departement);


?>