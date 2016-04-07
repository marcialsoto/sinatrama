<?php 
// the query
$args = array(
	'post_type'=> 'quotes',
	'post_per_page'    => '1',
	'order'    => 'DESC'
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>

<!-- pagination here -->

<!-- the loop -->
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<article <?php post_class('media'); ?>>
  <div class="pull-left">
    <?php
		if ( has_post_thumbnail() ) {
		$default_attr = array(
		'class'	=> "img-responsive"
		);
		the_post_thumbnail('quote-thumb', $default_attr);
	}
	?>
  </div>
  <div class="media-body">
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <header>
      <h4><?php the_title();?></h4>
    </header>
  </div>
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
