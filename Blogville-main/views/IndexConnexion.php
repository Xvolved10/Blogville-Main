
<!-- Création Formulaire connexion -->

<body>
    <div style="border: 2px solid black; margin-top: 10%; margin-inline:25%;text-align: center; font-size: x-large; background-color:wheat;">
        <h1 style="font-size: xx-large;  text-decoration:underline">Formulaire de connexion</h1>
        <br>
        <form action="" method="post" name="formconnexion">

            <label>Entrez votre Email :&nbsp</label>
            <input type="email" name="email" value="" style="text-align:left ; background-color:white">
            <?php
            if (isset($error["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error["email"]; ?></p>
                </div>
            <?php } ?><br><br>
            <label>Entrez votre mot de passe :&nbsp</label>
            <input type="password" name="MotDepasse" value="" style="text-align:left ; background-color:white">
            <br><br>
            <?php
            if (isset($error["MotDepasse"])) { ?>
                <p><?php echo $error["MotDepasse"]; ?></p>
            <?php } ?>

            </select>
            <br><br>

            <button type="submit" value="Connexion" name="Connexion" style="margin-bottom:2% ;background-color:royalblue; color:white; height:50px ;padding-left:1%; padding-right:1%">Connexion</button>
            <input type="submit" name="creercompte" value="Créer un compte" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ;">
    </div>
