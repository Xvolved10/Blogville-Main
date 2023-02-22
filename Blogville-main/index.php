<?php
session_start();
include_once("models/Constantes.php");
include_once("models/Database.php");
include("models/Article.php");
include("models/Utilisateurs.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Blogville.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Info</title>
</head>
<?php
if(isset($_GET["home"])){
    include_once("controllers/ctrl_articleShow.php");
    include_once("views/articleShow.php");
}else if(isset($_GET["Inscription"])){
    include_once("controllers/Inscriptionctrl.php");
    include_once("views/IndexInscription.php");
}else if(isset($_GET["Connexion"])){
    include_once("controllers/Connexionctrl.php");
    include_once("views/IndexConnexion.php");
}else if(isset($_GET["Article"])){
    include_once("controllers/Articlectrl.php");
    include_once("views/IndexArticle.php");
}else if(isset($_GET["Modification"])){
    include_once("controllers/Modificationctrl.php");
    include_once("views/IndexModification.php");
}else if(isset($_GET["Profil"])){
    include_once("controllers/Profilctrl.php");
    include_once("views/IndexProfil.php");
}else if(isset($_GET["Suppression"])){
    include_once("controllers/Confirmationsuppctrl.php");
    include_once("views/IndexSuppression.php");
}else{

}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>