<?php

$musketeerManager = new musketeerManager();
require_once("$racine/ressources/data.php");

isset($_GET["id"]) ? (int) $id = $_GET["id"] : $id = 0;
isset($_GET["int_min"]) ? (int) $int_min = $_GET["int_min"] : $int_min = 0;

$musketeerManager->getMusketeerById($id, $int_min);

//include("$racine/vues/v_musketeer.php");