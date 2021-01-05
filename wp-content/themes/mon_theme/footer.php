<footer>
    <div class="blog-footer--content">
        <div class="blog-footer--img"></div>
            <div class="blog-footer--nav">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Accueil</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/regles/">Règles</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/candidats/">Liste des candidats</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/resultats/">Résultats</a></li>
                </ul>
            </div>
    </div>
</footer>

<?php wp_footer(); ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    footer {
        width: 100%;
        background-color: #1637AD;
    }
    .blog-footer--content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1000px;
        margin: 0 auto;
        height: 300px;
    }
    .blog-footer--content .blog-footer--img {
        width: 50px;
        height: 50px;
        background-color: #fff;
    }
    .blog-footer--content .blog-footer--nav ul li {
        list-style: none;
        margin: 20px 0;
    }
    .blog-footer--content .blog-footer--nav ul li a {
        text-decoration: none;
        color: #fff;
    }

</style>
</body>
</html>