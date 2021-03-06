<?php get_header(); ?>
<div class="content">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile; ?>
        <nav>
        	<ul class="pagination">
        		<li class="previous"><?php next_posts_link( 'Previous' ); ?></li>
        		<li class="next"><?php previous_posts_link( 'Next' ); ?></li>
        	</ul>
        </nav>
    <?php
        endif;
    ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
