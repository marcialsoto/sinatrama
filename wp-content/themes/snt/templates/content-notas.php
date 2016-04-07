<article <?php post_class('media'); ?>>
  <?php if ( has_post_thumbnail() ) {
		$default_attr = array(
		'class'	=> "img-responsive pull-left"
		);
	the_post_thumbnail('news-thumb', $default_attr);
	}?>
  <div class="media-body">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
  </div>
</article>
