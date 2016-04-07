<?php $temp = $wp_query; $wp_query= null; 
	$wp_query = new WP_Query();
	$wp_query->query('showposts=5' . '&paged='.$paged);
		 ?>
<?php get_template_part('templates/page', 'header-notas'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  <?php get_template_part('templates/content', 'notas'); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
