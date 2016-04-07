<div class="page-header title">
  <h3><a href="<?php echo bloginfo('url') ?>/actividades">Próximas Actividades <i class="fa fa-angle-double-right"></i></a></h3>
</div>
<?php 
// the query
$args = array('posts_per_page' => 3, 'post_type' => 'actividades');
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>

<!-- pagination here --> 

<!-- the loop -->
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<article <?php post_class('media'); ?>>
  <header class="media-body">
    <?php
 
if(get_field('act_fecha_inicio'))
{
	$fi = DateTime::createFromFormat('Ymd', get_field('act_fecha_inicio'));
	$ff = DateTime::createFromFormat('Ymd', get_field('act_fecha_fin'));

	echo '<time>' . $fi->format('d-m-Y');
		if(get_field('act_fecha_fin'))
			{
				echo ' - ' . $ff->format('d-m-Y');
			}
		if(get_field('act_lugar'))
			{
				echo ' @ ' . get_field('act_lugar');
			}
	echo '</time>';
}
 
?>
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
