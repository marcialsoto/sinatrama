<div class="row block">
  <div class="col-sm-12">
    <?php
// The Query
$args = array(
	'post_type'=> 'banners',
	'posiciones'    => 'main',
	'post_per_page'    => '1',
	'order'    => 'DESC'
);
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
	if ( has_post_thumbnail() ) {
		$default_attr = array(
		'class'	=> "img-responsive"
		);
		echo '<a href="';
		echo get_field('banner_url');
		echo '">';
		the_post_thumbnail('ad-main-thumb', $default_attr);
		echo '</a>';
	}
endwhile;

// Reset Query
wp_reset_query();
?>
  </div>
</div>
