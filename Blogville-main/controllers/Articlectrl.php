<?php

$ajoue = new Article();
if(isset($_SESSION["id"])){




if (isset($_POST["Valider"])) {
    $error = [];
    if (isset($_POST['textes']) && !empty($_POST['textes'])) {
        $textes = $_POST['textes'];
    } else {
        $error['textes'] = "<p>Veuillez renseigner le champ<p>";
    }

    if (empty($error)) {
        $ajoue->setTextes($textes);
        $ajoue->setId_utilisateurs($_SESSION["id"]);
        $ajoue->requete();
    }
}
}
else{
    header("Location:index.php?Connexion");
}
