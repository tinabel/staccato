<div class="sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<?php the_author_meta('description'); ?>
	</div>
	<div class="sidebar-module">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives('type=monthly'); ?>
			<!-- More archive examples -->
		</ol>
	</div>
	<div class="sidebar-module">
		<h4>Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->
