<?php
$ajoue = new Utilisateurs();
// Condition bouton connexion


if (isset($_POST["Connexion"])) {
    $error = [];

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            $error["email"] = "Il faut renseigner un e-mail valide";
        }
    } else {
        $error['email'] = "<p>Le champ email est vide</p>";
    }

    if (isset($_POST['MotDepasse']) && !empty($_POST['MotDepasse'])) {
        $MotDepasse = $_POST['MotDepasse'];
    } else {
        $error['MotDepasse'] = "<p>Ce mot de passe n'existe pas </p>";
    }

    if (empty($error)) {
        try {
            $ajoue->setEmail($email);
            $ajoue->setMotDepasse($MotDepasse);
            $a = $ajoue->requete();
            var_dump($ajoue->getEmail());
            
            if ($a === false) {
                $messageprofil = "<p>Ce profil n'existe pas </p>";
            } else {
                if ($MotDepasse === $a["MotDepasse"]) {
                    $_SESSION["id"] = $a["id"];
                    $_SESSION["email"] = $a["email"];
                    $_SESSION["MotDepasse"] = $a["MotDepasse"];
                    $_SESSION["pseudo"] = $a["pseudo"];
                    $_SESSION["id_citie"] = $a["id_citie"];
                    $_SESSION["id_Roles"] = $a["id_Roles"];
                    
                    header("Location:index.php?Profil");
                    exit();
                } else {
                    $messageerreur = "<p> Mot de passe incorrect</p>";
                }
            }
        } catch (Exception $e) {
            echo "<p>ERREUR : " . $e->getMessage() . "</p>";
        }
    }
}

if (isset($_POST["creercompte"])) {
    header("Location:index.php?Inscription");
}
?>

