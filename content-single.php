<div class="post">
	<h2 class="post-title"><?php the_title(); ?></h2>
	<p class="post-meta"><?php the_date(); ?> <a href="#"><?php the_author(); ?></a></p>

	<?php the_content( $more_link_text = null, $strip_teaser = false ); ?>

    <span class="post-end">&#9884;</span>
</div>
