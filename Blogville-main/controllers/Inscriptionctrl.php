<?php
$ajoue = new Utilisateurs();
$ville = $ajoue->ville();

// Condition Bouton Inserer
if (isset($_POST["Inserer"])) {
    $error = [];

    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $error['email'] = "renseigner un email validé";
        }
    } else {
        $error['email'] = "Le champ email est manquant";
    }
    if (isset($_POST["MotDepasse"]) && !empty($_POST["MotDepasse"])) {
        if (mb_strlen($_POST["MotDepasse"]) >= 8) {
            $MotDepasse = $_POST["MotDepasse"];
        } else {
            $error['MotDepasse'] = "entrez au moins 8 caracteres";
        }
    } else {
        $error['MotDepasse'] = "Le mot de passe est manquant";
    }

    if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {
        $pseudo = $_POST["pseudo"];
    } else {
        $error['pseudo'] = "Le pseudo est manquant";
    }
    if (isset($_POST["id_citie"]) && !empty($_POST["id_citie"])) {

        $id_cities = (int) $_POST["id_citie"];
        if (is_int($id_cities) && $id_cities !== 0) {
            $id_cities2 = $id_cities;
        } else {
            $error['id_citie'] = "entrez une bonne bonne valeur";
        }
    } else {
        $error['id_citie'] = "choisissez une ville ";
    }
    if (empty($error)) {
        echo "pass";
        $ajoue->setEmail($email);
        $ajoue->setMotDepasse($MotDepasse);
        $ajoue->setPseudo($pseudo);
        $ajoue->setId_citie($id_cities2);
        $user = $ajoue->VerifMail_Pseudo();
        var_dump($user);
        if ($user === false) {
            $ajoue->insert();
            $message = "profil crée";
            header("Location:index.php?Connexion");
        } else {
            if ($user["email"] === $email) {
                $emailExiste = "le mail n'est pas dispo";
            }
            if ($user["pseudo"] === $pseudo) {
                $pseudoExiste = "le pseudo n'est pas dispo";
            }
        }
    }
}
if(isset($_POST["seconnecter"])) {
    header("Location:index.php?Connexion");
}
?>