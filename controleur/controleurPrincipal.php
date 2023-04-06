<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["form"] = "c_form.php";
    $lesActions["musketeer"] = "c_musketeer.php";
    $lesActions["characters"] = "c_characters.php";
    
    $lesActions["defaut"] = $lesActions["musketeer"];

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}


function chargerModeles($racine) {
    require_once("$racine/modele/Manager.php");

    require_once("$racine/modele/musketeer.php");
    require_once("$racine/modele/musketeerManager.php");

    require_once("$racine/modele/formManager.php");

    require_once("$racine/modele/charactersManager.php");
    require_once("$racine/modele/playableCharacter.php");
    require_once("$racine/modele/warriorClass.php");
    require_once("$racine/modele/mageClass.php");
}
