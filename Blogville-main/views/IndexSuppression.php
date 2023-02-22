
<body>
    <!-- Navbar -->
<header>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        <a class="nav-link" href="index.php?Inscription" style="color:white">Inscription</a>
            <br>
            <a class="nav-link" href="index.php?Connexion" style="color:white">Connexion</a>
            <br>
            <a class="nav-link" href="index.php?Profil" style="color:white">Profil</a>
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
<!-- Fin de Navbar -->
<div style="border: 2px solid black;margin-top:10%;margin-inline:25%;text-align: center; font-size: x-large; background-color: wheat; ">
    <h1 style="color:red; text-decoration: underline; " >Êtes vous sûr de vouloir supprimer votre profil ?</h1>
    <form action="" method="post">
        <p><?php  echo $messagesuppression ?></p>
    <input type="submit" name="Supprimer" value="Supprimer les données" style="background-color: red; color:black; height:50px ;padding-left:1%; padding-right:1% ; ">
    <br><br>
    <input type="submit" name="Retourprofil" value="Retourner au profil" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ;margin-bottom:3% ;">
    </div>
