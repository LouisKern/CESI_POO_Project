<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
</head>

<body>
    <?php $session = session(); ?>
    <h2><?php echo $title;
        echo $userInfos->username; ?></h2>
    <br>
    <nav>
        <ul>
            <li><a href="<?php echo site_url('Profilecontroller') ?>">Mon profil</a></li>
            <li><a href="<?php echo site_url('Recipe/add') ?>">Proposer une recette</a></li>
            <li><a href="<?php echo site_url('Recipe') ?>">Recettes</a></li>
            <li><a href="<?php echo site_url('Moderator') ?>">Panneau d'administration</a></li>
            <li><a href="<?php echo site_url('Authenticate/disconnect') ?>">Déconnexion</a></li>
        </ul>
    </nav>
</body>

</html>