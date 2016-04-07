<footer class="content-info" role="contentinfo">
  <div class="container">
  <div class="row block">
  	<div class="col-sm-3">
  		<?php get_template_part('templates/content', 'footer'); ?>
    </div>
  	<div class="col-sm-3">
    	<?php get_template_part('templates/content', 'actividades'); ?>
    </div>
  	<div class="col-sm-2">
    	<?php get_template_part('templates/content', 'organizacion'); ?>    
    </div>
  	<div class="col-sm-2">
	<?php get_template_part('templates/content', 'propuestas'); ?> 
    </div>
  	<div class="col-sm-2">
    	<?php get_template_part('templates/content', 'denuncias'); ?> 
    </div>
 
   
  </div>
  <div class="row copy block">    <hr />
  <p class="text-center">2008-<?php echo date("Y") ?> &copy; <?php bloginfo('name');?>. Todos los derechos reservados</p>
  </div>
  </div>
</footer>

<?php wp_footer(); ?>
