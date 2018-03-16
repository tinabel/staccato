<?php get_header(); ?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
    endwhile; ?>
    <nav>
    	<ul class="pager">
    		<li><?php next_posts_link( 'Previous' ); ?></li>
    		<li><?php previous_posts_link( 'Next' ); ?></li>
    	</ul>
    </nav>
    <?php
        endif;
    ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
