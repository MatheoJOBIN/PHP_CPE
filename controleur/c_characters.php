<?php
$charactersManager = new charactersManager();

$charactersManager->installScript($racine);

var_dump($charactersManager->getCharacters());
//var_dump($charactersManager->getCharacterByName('Jeremy'));
//$charactersManager->insertCharacter(array("name" => 'Jeremy', "str" => 10, "agi" => 10, "int" => 10, "tribe" => null, "class" => 'Magicien'));
//$charactersManager->invertClass();

include("$racine/vue/nav.php");
include("$racine/vue/v_characters.php");
?>