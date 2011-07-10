<?php get_header(); ?>

<div id="content">
	<?php while(have_posts()) : the_post(); ?>
			<div id="content-title"><?php the_title(); ?></div>
			<?php the_content(); ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>