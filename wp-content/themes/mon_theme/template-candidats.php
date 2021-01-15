<?php 
/*
Template Name: Candidats 
*/
?>

<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?> 

<section>
    <div class="container-candidats">
        <h1><?php the_field('title_candidat'); ?></h1>

        <p><?php the_field('description'); ?></p>

        <div class="profil-candidat">
            <div class="profil-candidat-left">
            <img src="<?php the_field('image_candidat'); ?>" alt="" />
                <div>
                    <h3><?php the_field('name_surname'); ?></h3>
                    <p><?php the_field('city'); ?></p>
                </div>
            </div>
            <div class="vote"><button><?php the_field('button'); ?></button></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
