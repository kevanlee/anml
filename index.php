<?php get_header(); ?>

	<div id="content">

<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">


				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><b><?php the_title(); ?></b></a></h2>

				<div class="entry">
					<?php the_content('Read more &raquo;'); ?>
				</div>

			</div>
		<?php endwhile; ?>

<div class="nav-previous alignleft"><?php next_posts_link( '&lt;&lt; Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts &gt;&gt;' ); ?></div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>


</div>

<?php get_footer(); ?>
