<section class="featured section row">
  <main class="f-news col-sm-8">
    <?php get_template_part('templates/slider', 'featured'); ?>
    <?php get_template_part('templates/ad', 'main'); ?>
    <?php get_template_part('templates/content', 'newsfeed'); ?>
    <?php get_template_part('templates/quote', 'main'); ?>
  </main>
  <aside class="sidebar col-sm-4" role="complementary">
    <?php get_template_part('templates/aside', 'featured'); ?>
    <?php get_template_part('templates/ad', 'aside'); ?>
    <?php get_template_part('templates/aside', 'social'); ?>
  </aside>
</section>
