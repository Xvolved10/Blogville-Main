<?php


$newsuppression = new Utilisateurs();
$messagesuppression="";
if (isset($_POST["Supprimer"])) {
    
        try {
            $newsuppression->setId($_SESSION['id']);
            $newsuppression->delete();
            session_destroy();
            header("Location:index.php?Inscription");

        } catch (Exception $e) {
            echo "<p>ERREUR : " . $e->getMessage() . "</p>";
        }
    }

// Condition bouton Retourprofil
if (isset($_POST["Retourprofil"])) {
    header("Location:index.php?Profil");
}
?>