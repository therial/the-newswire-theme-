<?php get_header(); ?>
<div class="mh-section mh-group">
	<div id="main-content" class="mh-loop">
		<?php mh_newsdesk_lite_before_page_content(); ?>
		<?php mh_newsdesk_lite_page_title(); ?>
		<?php if (is_home() && $paged < 2 || is_category() && $paged < 2) { ?>
			<?php get_template_part('content', 'news'); ?>
		<?php } else { ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part('content'); ?>
				<?php endwhile; ?>
				<?php mh_newsdesk_lite_pagination(); ?>
			<?php else : ?>
				<?php get_template_part('content', 'none'); ?>
			<?php endif; ?>
		<?php } ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>