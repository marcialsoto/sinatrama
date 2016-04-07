<div class="page-header title">
  <h3>Noticias</h3>
</div>
<?php 
// the query
$the_query = new WP_Query( 'posts_per_page=3' ); ?>
<?php if ( $the_query->have_posts() ) : ?>

<!-- pagination here --> 

<!-- the loop -->
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<article <?php post_class('media'); ?>>
  <?php if ( has_post_thumbnail() ) {
		$default_attr = array(
		'class'	=> "img-responsive pull-right"
		);
	the_post_thumbnail('newsfeed-thumb', $default_attr);
	}?>
  <header class="media-body">
    <?php get_template_part('templates/entry-meta'); ?>
    <h4> <a href="<?php the_permalink();?>">
      <?php the_title();?>
      </a> </h4>
  </header>
</article>
<?php endwhile; ?>
<!-- end of the loop --> 

<!-- pagination here -->

<?php wp_reset_postdata(); ?>
<?php else:  ?>
<p>
  <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
</p>
<?php endif; ?>
