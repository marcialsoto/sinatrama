<section class="widget widget-border-2">
  <h3><a href="<?php echo bloginfo('url') ?>/documentos">Gestiones de Sinatrama <i class="fa fa-angle-double-right"></i></a></h3>
  <div class="ss-content">
    <?php 
   $the_query = new WP_Query(array(
    'post_type' => 'Documentos', 
    'posts_per_page' => 5 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
    <article <?php post_class(); ?>>
      <header>
        <?php get_template_part('templates/entry-meta-documentos'); ?>
        <h4> <a href="<?php the_permalink();?>">
          <?php the_title();?>
          </a> </h4>
      </header>
    </article>
    <?php 
   endwhile; 
   wp_reset_postdata();
  ?>  
  <div class="slim-shadow hidden-xs"></div>
  </div>

</section>
