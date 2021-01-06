<?php

function mytheme_scripts() {
    /* Chargement fonts */
    wp_enqueue_style('Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap');
    wp_enqueue_style('Montserrat', 'https://fonts.gstatic.com');


    /* Chargement feuille de styles */
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/style.css', 1.0);
    wp_enqueue_style('my-header', get_template_directory_uri() . '/css/header.css', 1.0);
    wp_enqueue_style('my-regle', get_template_directory_uri() . '/css/template-regle.css', 1.0);


    /* Chargement fichier javascripts */
    wp_deregister_script('jquery'); // deregister le jquery par défaut de wordpress qui est forcé
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', 1.0);
    wp_enqueue_script('my-scripts', get_template_directory_uri() . '/assets/js/main.js', 1.0);

    
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

?>