<div id="carousel-feat" class="carousel slide">
  <div class="carousel-inner">
    <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'Destacados', 
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
    <div class="item active">
	<?php 
	  $format = get_post_format(); 
		  if($format == 'image'){
			 	echo '<i class="fa format fa-camera-retro"></i>';
		  	}elseif($format == 'video'){
				echo '<i class="fa format fa-youtube-play"></i>';
			}else{
				//Silence is Golden
			}
	  ?>
      <?php
// Must be inside a loop.

if ( has_post_thumbnail() ) {
	the_post_thumbnail('slider-thumb');
}
else {
	echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/default-slider-thumb.jpg" />';
}
?>
      
      <div class="carousel-caption col-sm-7 col-xs-12">
        <h4>
          <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h4>
        <p>
          <a class="btn-link" href="<?php the_permalink();?>">Leer m&aacute;s   <i class="fa fa-angle-double-right"></i></a>
        </p>
      </div>
    </div>
    <!-- item active -->
    <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
    <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'Destacados', 
    'posts_per_page' => 5, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
    <div class="item">
    	<?php 
	  $format = get_post_format(); 
		  if($format == 'image'){
			 	echo '<i class="fa format fa-camera-retro"></i>';
		  	}elseif($format == 'video'){
				echo '<i class="fa format fa-youtube-play"></i>';
			}else{
				//Silence is Golden
			}
	  ?>
            <?php
// Must be inside a loop.

if ( has_post_thumbnail() ) {
	the_post_thumbnail('slider-thumb');
}
else {
	echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/default-slider-thumb.jpg" />';
}
?>
      <div class="carousel-caption col-sm-7 col-xs-12">
        <h4>
          <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h4>
        <p>
          <a class="btn-link" href="<?php the_permalink();?>">Leer m&aacute;s   <i class="fa fa-angle-double-right"></i></a>
        </p>
      </div>
    </div>
    <!-- item -->
    <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
  </div>
  <!-- carousel-inner --> 
  <a class="left carousel-control" href="#carousel-feat" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control" href="#carousel-feat" data-slide="next"> <i class="fa fa-angle-right"></i> </a></div>
<!-- #myCarousel -->