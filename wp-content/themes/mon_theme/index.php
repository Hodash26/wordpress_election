    <?php get_header(); ?>

        <div class="container">
            <div class="text-container">
                <h2>L'éléction du plus grand patissiers de France</h2>
                
                <p class="edition">1ère édition</p>
                <p class="justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni veritatis expedita quasi ad quos laboriosam cum veniam voluptatem, nesciunt dolorem.
                    A, quo nulla placeat error, perspiciatis beatae nostrum voluptates inventore, est nisi reiciendis! Porro modi quidem,
                    dolores debitis harum molestias esse animi excepturi laboriosam labore, accusantium eligendi nostrum dignissimos natus?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum corrupti autem odio reiciendis voluptatibus cupiditate expedita in reprehenderit.
                    Fugit, eaque, provident in est earum voluptas suscipit nostrum saepe perspiciatis, dolores accusamus sint! Natus dicta perspiciatis magnam quibusdam
                    dolorem quia accusantium distinctio voluptate! Reprehenderit, labore odit dolores ea distinctio ex similique.
                </p>
                
            </div>
        </div>

        <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title();
        the_content();
    endwhile; 
endif; 
?>

