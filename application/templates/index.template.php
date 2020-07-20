<?php

namespace Inews;
defined('INEWS') or die('Acces interdit!!');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>3inews - Accueil</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/3inews.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans | Roboto:100,100i,400,400i">
</head>
<body>
    <header id="header-accueil">
    <div class="conteneur">
        <h1>
            <a href="#">
                <img src="images/logo-grand.png" alt="logo sistr">
            </a>
        </h1>
        <div id="connexion">
            <div id="val-msg">
                [%MESSAGES%]
            </div>
           <?php $this->login->render();?>
        </div>
    </div>
</header>
</body>
</html>