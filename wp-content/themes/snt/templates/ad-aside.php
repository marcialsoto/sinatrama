<div class="row block">
  <?php
// The Query
$args = array(
	'post_type'=> 'banners',
	'posiciones'    => 'aside', 
	'post_per_page'    => '5',
	'order'    => 'DESC'
);
query_posts( $args );?>
  <?php while ( have_posts() ) : the_post();?>
  <article <?php post_class('ad-aside col-sm-12 col-xs-6');?> >
    <?php if ( has_post_thumbnail() ) {
		$default_attr = array(
		'class'	=> "img-responsive"
		);
		echo '<a href="';
		echo get_field('banner_url');
		echo '">';
		the_post_thumbnail('full', $default_attr);
		echo '</a>';
	}?>
  </article>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>
