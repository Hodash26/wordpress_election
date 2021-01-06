<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->

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
        <div class="nav-button">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="nav-content--overlay"></div>
    </div>    
    </nav>

<style>
body {
    position: relative;
    min-height: 100vh;
}
.nav {
    width: 100%;
    background-color: #1637AD;
}
.nav .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 80%;
        margin: 0 auto;
        height: 100px;
}
.nav .nav-content .nav-content--img {
    width: 50px;
    height: 50px;
    background-color: #fff;
    z-index: 20;
}
.nav .nav-content .nav-content--nav {
    z-index: 20;
}
.nav .nav-content .nav-content--nav ul {
    display: flex;
}
.nav .nav-content .nav-content--nav ul li {
    list-style: none;
    margin: 0 30px;
}
.nav .nav-content .nav-content--nav ul li a {
    text-decoration: none;
    color: #fff;
}



.nav-button {
    width: 30px;
    height: 30px;
    position: relative;
    cursor: pointer;
    display: none;
    z-index: 20;
}
.nav-button span {
    width: 100%;
    height: 3px;
    background-color: #fff;
    position: absolute;
}
.nav-button span:first-child {
    top: 0;
}
.nav-button span:nth-child(2) {
    top: 50%;
    transform: translateY(-50%);
}
.nav-button span:nth-child(3) {
    bottom: 0;
}
.nav-button.nav-button_active span:first-child {
    top: 50%;
    transform: translateY(-50%) rotate(45deg);
}
.nav-button.nav-button_active span:nth-child(2) {
    opacity: 0;
}
.nav-button.nav-button_active span:last-child {
    bottom: 50%;
    transform: translateY(50%) rotate(-45deg);
}


.nav-content--overlay {
    position: fixed;
    z-index: 10;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #1637AD;
    display: none;
}
.nav-content--overlay.nav-content--overlay_active {
    display: block;
}

@media screen and (max-width: 800px) {
    .nav-button {
        display: block;
    }
    .nav-content--nav {
        position: absolute;
        top: 50%;
        left: -100%;
        transform: translateY(-50%);
    }

    .nav-content--nav.nav-content--nav_active {
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .nav-content--nav ul {
        flex-direction: column;
    }
    .nav .nav-content .nav-content--nav ul li {
        margin: 30px;
    }
    .nav .nav-content .nav-content--nav ul li a {
        font-size: 20px;
    }
}
</style>

<script>

let burgerButton = document.querySelector('.nav-button');
let menuOverlay = document.querySelector('.nav-content--overlay');
let navContent = document.querySelector('.nav-content--nav');


burgerButton.addEventListener('click', (e) => {
    e.preventDefault();
    navContent.classList.toggle('nav-content--nav_active');
    menuOverlay.classList.toggle('nav-content--overlay_active');
    burgerButton.classList.toggle('nav-button_active');
});
</script>
