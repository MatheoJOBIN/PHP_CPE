<?php
    if (isset($_POST['immat'])) {
        $immat = $_POST['immat'];
    }else{
        $immat = "";
    }

include("$racine/vue/nav.php");
include("$racine/vue/v_form.php");
?>