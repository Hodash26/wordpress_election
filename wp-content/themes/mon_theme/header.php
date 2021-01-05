<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/header.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">

    <?php wp_head(); ?>
</head>
<body>
    <nav class="nav">
    <div class="nav-content">
        <div class="nav-content--img"></div>
        <div class="nav-content--nav">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>">Accueil</a></li>
                <li><a href="<?php bloginfo('url'); ?>/regles/">Règles</a></li>
                <li><a href="<?php bloginfo('url'); ?>/candidats/">Liste des candidats</a></li>
                <li><a href="<?php bloginfo('url'); ?>/resultats/">Résultats</a></li>
            </ul>
        </div>
    </div>    
    </nav>

<style>

.nav {
    width: 100%;
    background-color: #1637AD;
}
.nav .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1000px;
        margin: 0 auto;
        height: 300px;
}

.nav .nav-content .nav-content--nav ul {
    display: flex;
}
.nav .nav-content .nav-content--nav ul li {
    list-style: none;
}
.nav .nav-content .nav-content--nav ul li a {
    text-decoration: none;
}

</style>
   
</body>
</html>