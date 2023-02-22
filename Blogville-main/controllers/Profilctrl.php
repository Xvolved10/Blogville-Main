<?php

if (isset($_SESSION["id"])){
    $ajoue = new Utilisateurs();

    $ajoue->setId($_SESSION["id"]);
    $affichage = $ajoue->select();

// Condition bouton commentaire/article
if (isset($_POST["article"])) {
    header("Location:index.php?Article");
}
// Condition bouton deconnexion
if (isset($_POST["deconnexion"])) {
    session_destroy();
    header("Location:index.php?Connexion");
}
// Condition bouton modifier
if (isset($_POST["Modifier"])) {
    header("Location:index.php?Modification&value=" . $_SESSION["id"]);
}
// condition bouton supprimer
if (isset($_POST['supprimer'])) {
    $suppression = $_POST['supprimer'];
    
    header("Location:index.php?Suppression&value=" . $_SESSION["id"]);
    // var_dump($requete);
}
}
else{
    header("Location:index.php?Connexion");
}
?>