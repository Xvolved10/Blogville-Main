

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
    <div style="border: 2px solid black;margin-top:10%;margin-inline:25%; text-align: center; font-size: x-large; background-color:lightpink; ">
        <form action="" method="post">
        <h1>Postez un commentaire</h1>
        <?php
            if (isset($error["textes"])) { ?>
                <p><?php echo $error["textes"]; ?></p>
            <?php } ?>
        <textarea name="textes" value="" style="background-color:lightblue ; color:darkorchid; width:75%; height:150px"></textarea>
        <br><br>
        <button type="submit" name="Valider" style="background-color: blue; color:white;margin-bottom:3% ; height:50px ;padding-left:1%; padding-right:1%">Valider</button>
        </form>
    </div>    
    
