<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
  	<div class="row">
    	<div class="navbar-header col-xs-6">
      <p>
        <?php setlocale(LC_TIME, "es_ES.UTF-8"); ?>
        <?php echo strftime("<span>%A</span>, %d de %B de %Y"); ?></p>
    </div>
    	<div class="col-xs-6 text-right">
      <?php
        if (has_nav_menu('super_navigation')) :
          wp_nav_menu(array('theme_location' => 'super_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </div>
    </div> 
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/logo.png" class="img-responsive" />' ?></a> </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </nav>
  </div>
</header>
