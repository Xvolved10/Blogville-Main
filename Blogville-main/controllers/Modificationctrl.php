<?php
$ajoue = new Utilisateurs();
try {
    $a = $ajoue->ville();
    
        $ajoue->setId($_SESSION["id"]);
       $b = $ajoue->select();

} catch (Exception $e) {
    echo "<p>ERREUR : " . $e->getMessage() . "</p>";
}

if (isset($_POST["Modification"])) {
    $error = [];
    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
    } else {
        $error['pseudo'] = "<p>Veuillez écrire un pseudo<p>";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $error['email'] = "<p>Veuillez écrire un email<p>";
    }
    if (isset($_POST['AncienMDP']) && !empty($_POST['AncienMDP'])) {
        $AncienMDP = $_POST['AncienMDP'];
        if (isset($_POST['MotDepasse']) && !empty($_POST['MotDepasse'])) {
            if (mb_strlen($_POST["MotDepasse"]) >= 8) {
                $MotDepasse = $_POST["MotDepasse"];
            } else {
                $error['MotDepasse'] = "entrez au moins 8 caracteres";
            }
        } else {
            $MotDepasse = $AncienMDP;
        }
    } else {
        $error['ErreurAncienMDP'] = "<p>Veuillez écrire votre ancien Mot de passe<p>";
    }

    

    if (isset($_POST['id_citie']) && !empty($_POST['id_citie'])) {
        $id_citie = (int) $_POST['id_citie'];
        if (is_int($id_citie) && $id_citie !== 0) {
            $citie = $id_citie;
        } else {
            $error['id_citie'] = "L'id_citie doit être un nombre entier";
        }
    } else {
        $error['id_citie'] = "<p>Veuillez choisir une ville<p>";
    }
    if (isset($_FILES['modif_avatar']) && $_FILES['modif_avatar']['error'] == 0) {
        
        $name2 = $_FILES['modif_avatar']['name'];

    }else {
        $name2 = $b['avatar'];
    }

    if (empty($error)) {
        try {
            if ($AncienMDP == $b['MotDepasse']) {
                if (!empty($name2)) {
                    $tmpName2 = $_FILES['modif_avatar']['tmp_name'];
                    move_uploaded_file($tmpName2, 'image/' . $name2);
                    // unlink("../views/image/". $b['avatar']);
                }   
                $idUser = (int)$_SESSION["id"];
                $ajoue->setAvatar($name2);
                $ajoue->setEmail($email);
                $ajoue->setPseudo($pseudo);
                $ajoue->setMotDepasse($MotDepasse);
                $ajoue->setId_citie($citie);
                $ajoue->setId($idUser);
                $verifUserEmail = $ajoue->mail();
                $verifUserPseudo = $ajoue->pseudo();
                if ($verifUserEmail != false && $verifUserEmail["id"] != $_SESSION["id"]) {
                    $mailExiste = "L'email est déjà utilisé.";
                } elseif ($verifUserPseudo != false && $verifUserPseudo["id"] != $_SESSION["id"]) {
                    $pseudoExiste = "Le nom d'utilisateur est déjà utilisé.";
                } else {
                    $update_avatar = $ajoue->requete_Modif_Avatar();
                    header("Location:index.php?Profil");
                }

            } else {
                $error['ErreurAncienMDP'] = "<p>L'ancien Mot de passe ne correspond pas<p>";
            }
           
        } catch (Exception $e) {
            echo "<p>ERREUR : " . $e->getMessage() . "</p>";
        }
    }
}
// Condition bouton Retourprofil
if (isset($_POST["Retourprofil"])) {
    header("Location:index.php?Profil");
}
?>