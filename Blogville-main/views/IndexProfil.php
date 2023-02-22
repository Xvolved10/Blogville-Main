


<body>
    <!-- Navbar -->
<header>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        <a class="nav-link" href="index.php?Inscription" style="color:white">Inscription</a>
            <br>
            <a class="nav-link" href="index.php?Connexion" style="color:white">Connexion</a>
            <br>
            <a class="nav-link" href="index.php?Article" style="color:white">Article</a>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>
<!--    Affichage profil -->
    <div style="border: 2px solid black;margin-top:10%;margin-inline:25%;text-align: center; font-size: x-large; background-color:lightpink; ">
        <?php
        // var_dump($_SESSION);
        ?>
        <h3 style="text-decoration: underline; ">Votre Pseudo est:</h3> <?php echo $affichage["pseudo"];
                                                                        ?> <br>
        <h3 style="text-decoration: underline;">L'email associé est:</h3> <?php
                                                                            echo $affichage["email"];
                                                                            ?>
        <!-- Boutons article/modifier/deconnexion/supprimer -->
        <form action="" method="post">
            <br><br>
            <input type="submit" name="article" value="Allez sur article ?" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ">
            <br><br>
            <input type="submit" name="Modifier" value="Modifier profil" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ; border-radius:10%">
            <input type="submit" name="deconnexion" value="Se déconnecter" style="background-color: red; color:white ; height:50px ;padding-left:1%; padding-right:1%">
            <br><br>
            <input type="submit" name="supprimer" value="Supprimer le profil" style="color:crimson; background-color:black ; margin-bottom:3% ; height:50px ;padding-left:1%; padding-right:1%">

        </form>
    </div>
