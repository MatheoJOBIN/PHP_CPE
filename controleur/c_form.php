<?php
    if (isset($_POST['immat'])) {
        $immat = $_POST['immat'];
    }else{
        $immat = "";
    }
    if (empty($_POST["immat"])) {
        $immatErr = "immat is required";
      }else{
        $immatErr = "";
      }

    if (isset($_POST['type'])){
        $option = $_POST['type'];
    } else {
        $option = "";
    }

    if (isset($_POST['Pro'])){
        $Pro = true;
    } else {
        $Pro = false;
    }

    if (isset($_POST['Escale'])){
        $Escale = true;
    } else {
        $Escale = false;
    }

    if (isset($_POST['km'])){
        $km = $_POST['km'];
    }else{
        $km = "";
    }
    if(empty($_POST["km"])){
        $kmErr = "km is required";
      }else{
        $kmErr = "";
      }

    if (isset($_POST['nbJ'])){
        $nbJ = $_POST['nbJ'];
    }
    if(empty($_POST["nbJ"])){
        $nbJErr = "nbJ is required";
      }else{
        $nbJErr = "";
      }

    if (isset($_POST['Essence'])){
        $Essence = true;
    } else {
        $Essence = false;
    }

    if (isset($_POST['Diesel'])){
        $Diesel = true;
    } else {
        $Diesel = false;
    }

    if (isset($_POST['GPL'])){
        $GPL = true;
    } else {
        $GPL = false;
    }

    if (isset($_POST['Bio'])){
        $Bio = true;
    } else {
        $Bio = false;
    }

    if (isset($_POST['Assu'])){
        $Assu = true;
    } else {
        $Assu = false;
    }

include("$racine/vue/nav.php");
include("$racine/vue/v_form.php");
?>