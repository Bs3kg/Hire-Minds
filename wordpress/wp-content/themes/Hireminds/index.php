<?php get_header('page'); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; else: ?>

    <h1>Oops!</h1>
    <p>Looks like something went wrong.</p>

<?php endif; ?>




<?php get_footer(); 


